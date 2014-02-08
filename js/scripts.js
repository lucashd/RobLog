$(function() {

    // Set up Parse
    Parse.initialize("z8auWqqLMBZDcbzrT4IOY5jQOZDeO4jWdHIBDPkV", "wO2hAHfHsvSkV31nerc3SQ5txTVcF0IIZaYzMa4B");

    // Fake login
    $("#login-btn").on("click", function() {
        window.location.href = "home";
    });

    function loadCurrentStudiers()
    {
        var StudierObject = Parse.Object.extend("StudierObject");
        var query = new Parse.Query(StudierObject);

        query.find({
            success: function(results) {
                // Do something with the returned Parse.Object values
                for (var i = 0; i < results.length; i++) {
                    var object = results[i];
                    $('#study-stream-table > tbody:last').append('<tr><td>' + group_link + '</td></tr>');
                }
            },
            error: function(error) {
                alert("Error: " + error.code + " " + error.message);
            }
        });
    }

    $("#add-group-dialog").dialog({
        autoOpen: false,
        dialogClass: "customDialog",
        width: 260,
        height: 292,
        title: "Add Group",
        buttons: [{
            text: "Add Group",
            click: function () {
                addNewGroup($("#new-group-name").val());
                $(this).dialog("close");
            }
        }]
    });

    $("#add-group-btn").on("click", function () {
        $("#add-group-dialog").dialog("open");

    });

    function addNewGroup(group_name)
    {
        var GroupObject = Parse.Object.extend("GroupObject");
        var groupObject = new GroupObject();

        groupObject.set("groupName", group_name);

        groupObject.save(null, {
            success: function(groupObject) {
                // Execute any logic that should take place after the object is saved.
            },
            error: function(groupObject, error) {
                // Execute any logic that should take place if the save fails.
                // error is a Parse.Error with an error code and description.
            }
        });
        window.location.href = "../home";
    }

    function loadGroups()
    {
        var GroupObject = Parse.Object.extend("GroupObject");
        var query = new Parse.Query(GroupObject);

        query.find({
            success: function(results) {
                var new_table = "";
                // Do something with the returned Parse.Object values
                for (var i = 0; i < results.length; i++) {
                    var object = results[i];
                    var group_name = object.get('groupName');
                    var group_link = "<a class='groupLink' href='clickedGroup.php?groupName=" + group_name + "'>" + group_name + "</a>";

                    new_table += '<tr><td>' + group_link + '</td></tr>';
                }
                $("#groups-table tbody").html(new_table);

                // For table row clicks
                $("tr").on("click", function() {
                    window.location = $(this).find('a').attr('href');
                });
            },
            error: function(error) {
                alert("Error: " + error.code + " " + error.message);
            }
        });
    }

    loadGroups();


});