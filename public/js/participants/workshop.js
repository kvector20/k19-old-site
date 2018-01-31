$(function() {

    var info = {
        "Robotics": [
            "The most interesting thing in science is when you apply what you have learnt, when you make your own ROBOT! In Robotics workshop you will learn what is ARDUINO and how to use it, what are other electronic components, and mechanics basics which will help you to build your own robot. In Robotics workshop, you will make 2 main projects."
        ],
        "Advanced Robotics": [
            "It is the workshop that is much closer to many systems in our lives like digital clock, in ADVANCED ROBOTICS workshop you will learn the structure of AVR microcontroller , how to use it with other electronic components to build your project and you will learn also more details about these components."
        ],
        "Web design": [
            "One of the most important reasons that make websites like Facebook, twitter, even Jumia successful is the design of the web site, using attractive effects and make it friendly to use. In web design workshop you will learn HTML, CSS, and java script to make your website."
        ],
        "Soft Skills": [
            "Dream without specified goal is mirage! Science without good presentation skills can’t make a good instructor! So soft skills workshop will help you to reach your goal by Communication skills, Presentation skills, Time management, Body language, Personality analysis, CV, and interview Sessions."
        ],
        "Engine and Transmission": [
            "One of our passions as normal people is to drive a powerful car and feel this power by accelerating, deaccelerating, shifting up & down, and making drifts. Imagine you are driving a car like Nissan GTR or BMW i8, what will you feel?! In our workshop you will learn how to generate power that move vehicle and how to transmit it to wheels in different ways "
        ],
        "Suspension": [
            "Safe and comfort are the main requirement if you are buying a car, SO in suspension workshop you will learn how to make the car more safe, comfortable, and luxury through suspension system and over control the car by steering & braking systems."
        ],
        "Photoshop": [
            "Have you ever thought about how your favorite book cover is designed?! Or what are the specifications for the highly attractive designs on Facebook?! Photoshop workshop will help you to know how to use photoshop program, know design concepts, and to put your MAGICAL touch to make glorious designs! "
        ],
        "Android": [
            "Lollipop, marshmallow, and Oreo! Android world is very big and it’s so interesting to get into that world! In this workshop you will learn how to use JAVA & XML to build your first app and take the first step in android developing. "
        ],
        "Aerodynamics": [
            "The design of cars doesn’t only depend on the attractive shape, but its real importance is to make the car faster and stable using AERODYNMICS LAWS! In this workshop you will learn the air flow around the car and devices that help the car to overcome the resistance of air, make the most efficient use of fuel and help the car to stay stable."
        ],
    };

    $(".container .layers.first .card").on("click", function() {
        var object = $(this);
        object.parents(".first").css({
            "transform": "scale(2)",
            "opacity": "0.25",
        });
        object.parents(".first").hide(400);
        var second = object.parents(".first").siblings(".second");
        second.show(400);

        // put Data
        // console.log(info[object.data("work")]);
        second.find(".work-head").text(object.data("work"));
        second.find(".descrip").text(info[object.data("work")]);
        second.find("a.choose").attr("href", "register.php?workshop=" + object.data("work")).text("Register For " + object.data("work") + " Workshop");

    });

    $(".layers.second .back").on("click", function() {
        console.log("back");
        $(this).parents(".second").siblings(".first").css({
            "opacity": "1",
            "transform": "scale(1)",
            "display": "block",
        });
        $(this).parents(".second").hide();
    });

});