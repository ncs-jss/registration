$(document).ready(function() {

    $(".button").click(function() {
        // $(".sidebar").toggle();
        console.log($(".section1").css("display"));
        if ($(".section1").css("display") == "none") {
            $(".section1").css({"display" : "block"});
            $(".section1").animate({left: '0'});
            $(".button div").css({"background-color": "#fff"});
        } else {
            $(".section1").animate({left: '-100%'}, function() {
                $(".section1").css({"display": "none"});
                $(".button div").css({"background-color": "#222"});
            });
        }
    });

});

window.onload = function(){


    conversationforms();

    function verify(res) {
        return $.ajax({
            url: "http://localhost:8000/verify",
            type: "post",
            data: res,
            async: false,
            dataType: "json"
        });
    }

    function conversationforms() {
        var conversationalForm = window.cf.ConversationalForm.startTheConversation({
            formEl: document.getElementById("form"),
            // context: document.getElementById("cf-context"),

            userInterfaceOptions: {
                controlElementsInAnimationDelay: 250,
                robot: {
                    robotResponseTime: 500,
                    chainedResponseTime: 400
                },
                user:{
                    showThinking: false,
                    showThumb: true
                }
            },

            flowStepCallback: function(dto, success, error)
            {

                if(dto.tag.id == "name"){
                    if(dto.tag.value.trim() != ""){
                        return success();
                    }else{
                        return error();
                    }
                    //conversationalForm.stop("Stopping form, but added value");
                } else if(dto.tag.id == "admission_no"){
                    var re = /^[0-9]{2}\w{2,3}[0-9]{3}$/;
                    if(re.test(dto.tag.value)){

                        res = verify({'admission_no': dto.tag.value}).responseJSON;
                        if (res.status) {
                            return success();
                        } else {
                            conversationalForm.addRobotChatResponse("The student with this admission number is already registered");
                            // $("cf-chat-response text p:last").css({"background-color": '#ff4c4c'});
                            return error("Enter different admission no");
                        }

                    } else {
                        return error();
                    }
                } else if(dto.tag.name == "email"){
                    var re = /^\S+@\w+\.\w+$/;
                    if(re.test(dto.tag.value)) {

                        res = verify({'email': dto.tag.value}).responseJSON;
                        if (res.status) {
                            return success();
                        } else {
                            return error("Email is already registered");
                        }
                    } else {
                        return error();
                    }
                } else if(dto.tag.name == "mobile"){
                    var re = /^[0-9]{10}$/;
                    if(re.test(dto.tag.value)) {
                        return success();
                    } else{
                        return error();
                    }
                } else if(dto.tag.name == "submit-form"){
                    if(dto.tag.value[0] == "Yupp") {
                        return success();
                    } else{
                        conversationalForm.addRobotChatResponse("Wants to make changes in the response, click on the respective answer to make changes.");
                        return error();
                    }
                }
                return success();
            },
            submitCallback: function(){
                // be aware that this prevents default form submit.
                var formDataSerialized = conversationalForm.getFormData(true);
                formDataSerialized['_token'] = $('input[type="hidden"]').val();
                console.log(formDataSerialized['_token']);
                console.log("Formdata, serialized:", formDataSerialized);
                $.post("http://localhost:8000/register", formDataSerialized,
                function(data){
                    if (data.status) {
                        conversationalForm.addRobotChatResponse("We have received your submission, Thank You!!");
                        // conversationalForm.addRobotChatResponse("Wants to fill another response");

                    } else {
                        conversationalForm.addRobotChatResponse("Error, Please submit again");
                        // conversationforms();
                    }
                }, "json");
            }
        });
    }

};
