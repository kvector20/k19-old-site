$(function() {

    $('a[data-toggle="tab"]').on("click", function(e) {
        e.preventDefault();
    });

    var info = {
        "Designing Members": [
            "Designing posters, nametags, banners & T-shirts.",
            "Designing needed designs by Social Media and Magazine.",
        ],

        "Magazine Members": [
            "Providing written output for k-vector.",
            "Support Social Media channels with articles and posts.",
            "Cooperate with academic members on technical part of The Magazine.",
        ],
        "IT Members": [
            "Working on K Vector’s website & e-magazine.",
            "Providing technical support for the website.",
            "Help our Android Participants to launch k vector’s mobile application at the end of the year.",
        ],
        "Photography& Video-making Members": [
            "Photographing K Vector’s Booth, Sessions and events.",
            "Responsible of preparing videos for K vector events.",
        ],
        "Social Media Members": [
            "Make the marketing campaign of any project.",
            "Responsible for social media (FB Page, Twitter and Instagram).",
            "Determine the Other universities where we will put our booth on it with PM Academic.",
            "Determine the number of publications of any Marketing campaign.",
        ],
        "DCR&L Members": [
            "Designing and building the booth.",
            "Handle all booth tools.",
            "Representative of K Vector with PR Committee to the students through the booths.",
            "Responsible of buying everything as (workshops materials, booth, decoration material )",
            "Coming up with creative ideas for decorating (booth, sessions and events).",
            "Responsible of coordinating the whole day of sessions and events.",
        ],
        "QC& HR Members": [
            "Responsible of controlling the quality of k vector’s projects.",
            "Responsible of Database of participants.",
            "Responsible of doing Evaluation system for monitoring the progress of the projects, members and participants.",
            "Help heads to evaluate member of committee every month.",
            "Make individual meetings with all k vector’s members to know their feedback.",
            "Prepare monthly report about each committee, performance,member’s needs and progress.",
            "Document and Evaluate K vector’s projects.",
            "Responsible of doing evaluation forms for the magazine.",
            "Responsible of doing surveys to fundraising committee.",
            "Monitoring the sessions, events and magazine.",
            "Receiving all attends during sessions and events.",
        ],
        "Fundraising Members": [
            "Search & Make database for the sponsors.",
            "Providing K Vector by needed Sponsors.",
            "Upgrading the benefit pack.",
            "Make New Benefit for Catering & Academic.",
            "Make Good Relations with Sponsors.",
            "Negotiate with companies, factories or Banks to get training &field trip for the students.",
        ],
        "Robotics Academic Members": [
            "Study and prepare sessions.",
            "Prepare presentations and rehearsals for the session.",
            "Deliver all about Arduino , sensors , codes and mechanical designs of  robots to the student.",
            "Keep up with participants, aid, evaluate, and manage the projects with them.",
        ],
        "Android Members": [
            "Study and prepare sessions.",
            "Prepare presentations and rehearsals for the session.",
            "Illustrate java and android studio to the participants and qualify them to make a mobile application.",
            "Keep up with participants, aid, evaluate, and manage the projects with them.",
        ],
        "Web design Members": [
            "Study and prepare sessions.",
            "Prepare presentations and rehearsals for the session.",
            "Illustrate HTML,CSS and other things which qualify the partcipants to design a gorgeous website.",
            "Keep up with participants, aid, evaluate, and manage the projects with them.",
        ],
        "Advanced Robotics Members": [
            "Study and prepare sessions.",
            "Prepare presentations and rehearsals for the session.",
            "Deliver all about AVR , Embedded C programming languages and basics of mechanics to the student.",
            "Keep up with participants, aid, evaluate, and manage the projects with them.",
        ],
        "EPR Members": [
            "Responsible of getting approvals for making the booth, sessions and events outside Cairo University.",
            "Responsible of reserving all halls which we need in sessions and events.",
            "Negotiate with speakers to come in our events.",
            "Make Good Relations with student activities outside Cairo University.",
            "Representative of K Vector to the students through the booths outside Cairo University.",
            "Make Profile for K Vector.",
        ],
        "IPR Members": [
            "Responsible of getting approvals for making the booth, sessions and events inside Cairo University.",
            "Responsible of reserving all halls which we need in sessions and events inside Cairo University.",
            "Make Good Relations with student activities inside Cairo University.",
            "Responsible of getting catering for events of k’18.",
            "Representative of K Vector to the students through the booth inside Cairo University.",
            "Do the ushering in the sessions and events inside Cairo University.",
            "Deal with doctors to provide the student with courses or sessions.",
            "Giving presentations about K vector.",
        ],
        "Soft Skills Academic Members": [
            "Study and prepare sessions.",
            "Prepare presentations and rehearsals for the session.",
            "Increase and improve soft skills of the participants and teach them how to use them in their daily life and make the best use of it.",
            "Keep up with participants, aid, evaluate, and manage the projects with them.",
        ],
        "Photoshop Academic Members": [
            "Study and prepare sessions.",
            "Prepare presentations and rehearsals for the session.",
            "Illustrate  the photo shop program , and teach participants the basic tools of it and how to use it to design professionally.",
            "Keep up with participants, aid, evaluate, and manage the projects with them.",
        ],
        "Areodaynamics Members": [
            "Study and prepare sessions.",
            "Prepare presentations and rehearsals for the session.",
            "Deliver their technical knowledge and science about Areodaynamics of the vehicles during the sessions.",
            "Keep up with participants, aid, evaluate, and manage the projects with them.",
        ],
        "Suspension Members": [
            "Study and prepare sessions.",
            "Prepare presentations and rehearsals for the session.",
            "Deliver their technical knowledge and science about the suspension systems and breaking systems in vehicles.",
            "Keep up with participants, aid, evaluate, and manage the projects with them.",
        ],
        "Engine & Transmission Members": [
            "Study and prepare sessions.",
            "Prepare presentations and rehearsals for the session.",
            "Deliver their technical knowledge and basic science about engine and transmission system of the vehicle",
            "Keep up with participants, aid, evaluate, and manage the projects with them.",
        ],
        "Robotics Juniors Members": [
            "Study and Prepare sessions. ",
            "Prepare presentations and rehearsals for the sessions. ",
            "Discuss ideas, problems and solutions related to juniors with the Head.",
            "Teach the school students the basics of arduino and robotics.",
            "Implementing the work plan according to the head's instructions.",
            "Help and Evaluate juniors at schools to achieve the best understanding of the material.",
            "Manage the projects with juniors at schools.",
        ],
        "Soft Skills Juniors Members": [
            "Study and Prepare sessions. ",
            "Prepare presentations and rehearsals for the sessions. ",
            "Discuss ideas, problems and solutions related to juniors with the Head.",
            "Teach the school students the concept of communication skills,problem solving and decision making skills, and time mangement skills.",
            "Implementing the work plan according to the head's instructions.",
            "Help and Evaluate juniors at schools to achieve the best understanding of the material",
            "Manage the projects with juniors at schools.",
        ],
    };

    $("#committees").on("click", ".card button", function() {
        var headingText = $(this).siblings("h4").text();
        $(".modal-title").text(headingText);
        $(".modal-body").html("<ul></ul>");
        var arrayLength = info[headingText].length;
        for (var i = 0; i < arrayLength; i++) {
            $(".modal-body ul").append("<li>" + info[headingText][i] + "</li>");
        }
    });

    for (var key in info) {
        $("#committees").append(
            '<div class="col-lg-4">' +
            '<div class="card text-center">' +
            '<div class="card-header">Committee</div>' +
            '<div class="card-block">' +
            '<div class="overlay">' +
            '<h4 class="card-title">' + key +
            '</h4>' +
            '<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-danger btn-block">More Information</button>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>'
        );
    }

})