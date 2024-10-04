// Scripts for "Everything about Tunna Duong" website.
// © Copyright 2022 Tunna Duong. All rights reserved.

// const originalNum = parseInt($("#additional-number").text());
// const newNum = originalNum + 1;

// function responsivePeopleSection() {
//   var sectionWidth = $(".main--section-3").width();
//   var flag = 0;
//   if (sectionWidth < 250 && flag == 0) {
//     flag = 1;
//     $(".people-i-met > img").last().css("display", "none");
//     $("#additional-number").text("+" + newNum);
//   } else {
//     $(".people-i-met > img").last().css("display", "block");
//     $("#additional-number").text("+" + originalNum);
//   }
// }

// responsivePeopleSection();

// $(window).on("resize", responsivePeopleSection);

var timer = null;

function toggleNav() {
  $("#myNav").toggleClass("full-height");
  $(".overlay-below").toggleClass("full-height");
  $(".menu-button-container").toggleClass("menu-active");
  $(".overlay-content").toggleClass("push-up");
  $("#myNav").removeClass("o-show");
  if (timer !== null) {
    clearTimeout(timer);
    timer = null;
  } else {
    if ($("#myNav").hasClass("o-show")) {
      $("#myNav").removeClass("o-show");
    } else {
      timer = setTimeout(() => {
        $("#myNav").toggleClass("o-show");
      }, 500);
    }
  }
}

// hideNav
function hideNav() {
  $(".overlay-below").removeClass("full-height");
  $(".menu-button-container").removeClass("menu-active");
  $(".overlay-content").addClass("push-up");
  $("#myNav").removeClass("o-show");
  setInterval(() => {
    $("#myNav").removeClass("o-show");
  }, 1);
  $("#myNav").removeClass("full-height");
  $(".overlay-below").removeClass("full-height");
}

$("#typed").typed({
  strings: [
    "Tất cả mọi thứ về",
    "Nhật ký hằng ngày của",
    "Bài viết blog của",
    "Những người bạn của",
    "Mọi người nghĩ gì về",
    "Cảm nghĩ về mọi người của",
    "Xem những sản phẩm của",
    "Kết nối cùng với",
    "Gửi mọi tâm tư đến",
    "Báo lỗi cho",
    "Ủng hộ một ly cà phê cho",
    "Tất cả mọi thứ về",
  ],
  typeSpeed: 40,
  startDelay: 0,
  backSpeed: 40,
  backDelay: 1200,
  loop: false,
  contentType: "html",
});

const toggleSwitch = document.querySelector(
  '.theme-switch input[type="checkbox"]'
);
const currentTheme = localStorage.getItem("theme");
if (currentTheme) {
  console.log("it happend, ", currentTheme);
  if (currentTheme == "dark") {
    console.log("it happend2");
    toggleSwitch.checked = true;
    document.documentElement.setAttribute("data-theme", "dark");
  } else {
    document.documentElement.setAttribute("data-theme", "light");
    toggleSwitch.checked = false;
  }
} else {
  if (
    window.matchMedia &&
    window.matchMedia("(prefers-color-scheme: dark)").matches
  ) {
    // dark mode is detected
    document.documentElement.setAttribute("data-theme", "dark");
    toggleSwitch.checked = true;
  } else {
    document.documentElement.setAttribute("data-theme", "light");
    toggleSwitch.checked = false;
  }
}

function switchTheme(e) {
  if (e.target.checked) {
    document.documentElement.setAttribute("data-theme", "dark");
    localStorage.setItem("theme", "dark");
  } else {
    document.documentElement.setAttribute("data-theme", "light");
    localStorage.setItem("theme", "light");
  }
}

window
  .matchMedia("(prefers-color-scheme: dark)")
  .addEventListener("change", (event) => {
    const newColorScheme = event.matches ? "dark" : "light";
    document.documentElement.setAttribute("data-theme", newColorScheme);
    if (newColorScheme === "dark") {
      toggleSwitch.checked = true;
    } else {
      toggleSwitch.checked = false;
    }
  });

toggleSwitch.addEventListener("change", switchTheme);

jQuery.expr.filters.offscreen = function (el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.x + rect.width < 0 ||
    rect.y + rect.height < 0 ||
    rect.x > window.innerWidth ||
    rect.y > window.innerHeight
  );
};

$(document).ready(function () {
  $("#floating-footer-alert")
    .delay("4000")
    .slideToggle("slow", function () {
      $("#floating-footer-alert").hide();
    });
});

$(".under-construction-badge").on("click", function (e) {
  if (!$("#floating-footer-alert").is(":visible")) {
    $("#floating-footer-alert").slideToggle("slow", function () {
      $("#floating-footer-alert").show();
    });
  }
});

$("#alert-close-btn").on("click", function (e) {
  $("#floating-footer-alert").stop(true);
  $("#floating-footer-alert").slideToggle("slow", function () {
    $("#floating-footer-alert").hide();
  });
});

moment.locale("vi");

NProgress.start();
NProgress.configure({ showSpinner: false });

$(document).ready(function () {
  window.scrollTo({ top: 0, behavior: "smooth" });
  NProgress.done();
});

$(document).ajaxComplete(function () {
  // window.scrollTo({ top: 0, behavior: "smooth" });
  NProgress.done();
});

function go(url) {
  window.location.href = url;
}

$("html").on("click", "[external]", function (e) {
  e.preventDefault(); // cancel click
  // add class cursor pointer
  var url = $(this).attr("href");
  go(url);
});

$("html").on("click", "[href]", function (e) {
  e.preventDefault(); // cancel click
  var url = $(this).attr("href");
  url = url.replace("#", "");
  window.history.pushState({}, "", url);
  NProgress.start();

  $.ajax({
    url: url + "?rel=page",
    success: function (data) {
      window.scrollTo({ top: 0, behavior: "smooth" });
      $("#root").html(data);
    },
  });
});

$("html").on("click", "[hide-nav]", function (e) {
  e.preventDefault(); // cancel click
  hideNav();
});

window.onpopstate = function () {
  NProgress.start();

  $.ajax({
    url: document.location + "?rel=page",
    success: function (data) {
      $("#root").html(data);
    },
  });
};

var canvas = document.getElementById("signature_box");

var signaturePad = new SignaturePad(canvas, {
  backgroundColor: "rgb(255, 255, 255)", // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
});

function resizeCanvas() {
  const ratio = Math.max(window.devicePixelRatio || 1, 1);
  canvas.width = canvas.offsetWidth * ratio;
  canvas.height = canvas.offsetHeight * ratio;
  canvas.getContext("2d").scale(ratio, ratio);
  signaturePad.clear(); // otherwise isEmpty() might return incorrect value
}

var dwidth = $(window).width();

$(window).resize(function () {
  var wwidth = $(window).width();
  if (dwidth !== wwidth) {
    dwidth = $(window).width();
    resizeCanvas();
    // console.log("resize");
  }
});

resizeCanvas();
