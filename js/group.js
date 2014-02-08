/**
 * Created by lucas on 2/8/14.
 */
$(function() {
    Parse.initialize("z8auWqqLMBZDcbzrT4IOY5jQOZDeO4jWdHIBDPkV", "wO2hAHfHsvSkV31nerc3SQ5txTVcF0IIZaYzMa4B");

    function loadMembers()
    {
        var current_group = $.trim($("#group-name").text());
        var UserObject = Parse.Object.extend("UserObject");
        var query = new Parse.Query(UserObject);

        query.equalTo("groups", current_group);
        query.find({

            success: function(results) {
                var new_table = "";
                // Do something with the returned Parse.Object values
                for (var i = 0; i < results.length; i++) {
                    var object = results[i];
                    var member_name = object.get('name');
                    var img_url = object.get('pictureUrl');

                    new_table +=
                        '<tr>' +
                            '<td>' +
                                '<img class="userImg" src="' + img_url + '"/>' +
                                '<div class="memberName">' + member_name + '</div>'+
                            '</td>' +
                        '</tr>';

                }
                $("#members-table tbody").html(new_table);

            },
            error: function(error) {
                alert("Error: " + error.code + " " + error.message);
            }
        });
    }

    loadMembers();

});