{"filter":false,"title":"pa_viewRecord.js","tooltip":"/js/pa_viewRecord.js","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":0,"column":18},"action":"remove","lines":["// JavaScript File"],"id":1},{"start":{"row":0,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":["function viewPatientRecord(recordId){","    ","                $.ajax({                                                //Ajax function starts","                type: \"POST\",                                           //Uses a method called post, which is used to post variables stored above.","                url: \"../phpFunctions/viewRecord.php\",                     //the location these variables will be sent to.","                data: { recordId: recordId}               //The variables we wish to post.","                }).done(function( response ) {","                ","                response = JSON.parse(response);","                 ","                $(\"#recordSubject\").html(\"<p>\"+response[0].subject+\"</p>\");","                $(\"#recordNote\").html(\"<p>\"+response[0].notes+\"</p>\");","                $(\"#recordDate\").html(\"<p>\"+response[0].date+\"</p>\");","               ","        });","}"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":2,"column":16},"end":{"row":2,"column":16},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1481169746481,"hash":"3fc2c86f12e4961b7d2bea8748410718f7091e69"}