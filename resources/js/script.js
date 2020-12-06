// For the sticky navigation
$("#features").waypoint(
  function (direction) {
    if (direction === "down") {
      $("#top-nav").addClass("sticky");
    } else {
      $("#top-nav").removeClass("sticky");
    }
  },
  { offset: "80px" }
);

// Scroll on buttons
$("#scroll-to-plan").click(function () {
  $("html, body").animate(
    { scrollTop: $("#subscriptions").offset().top },
    1000
  );
});

$("#scroll-to-start").click(function () {
  $("html, body").animate({ scrollTop: $("#features").offset().top }, 1000);
});

// Navigation scroll
$("#top-nav li a").click(function (e) {
  var targetHref = $(this).attr("href");

  $("html, body").animate({ scrollTop: $(targetHref).offset().top }, 1000);

  e.preventDefault();
});

// Animations on scroll
$(".js--wp-1").waypoint(
  function (direction) {
    $(".js--wp-1").addClass("animate__animated animate__fadeIn");
  },
  { offset: "60%" }
);

$(".js--wp-2").waypoint(
  function (direction) {
    $(".js--wp-2").addClass("animate__animated animate__fadeInUp");
  },
  { offset: "60%" }
);

$(".js--wp-3").waypoint(
  function (direction) {
    $(".js--wp-3").addClass("animate__animated animate__fadeIn");
  },
  { offset: "60%" }
);

$(".js--wp-4").waypoint(
  function (direction) {
    $(".js--wp-4").addClass("animate__animated animate__pulse");
  },
  { offset: "60%" }
);

// Mobile navigation
$(".mobile-nav-icon").click(function () {
  var nav = $(".main-nav");
  nav.slideToggle(200);

  var hamburgerIcon = $(".hamburger-btn");
  hamburgerIcon.attr("name", function (index, attr) {
    return attr === "menu-outline" ? "close-outline" : "menu-outline";
  });
});
