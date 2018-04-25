$(document).ready(function(){
    new TypeIt('#type1', {
        speed: 50,
        autoStart: false,
    })
    .type('Overview')
    .pause(500)
    .break()
    .type("Client's Visions")
    .pause(500)
    .delete(7)
    .type("Missions")
    .pause(500)
    .delete(17)
    .type("Operating Plan")
    .pause(500)
    .delete(14)
    .type("Hiring Strategies")
});
