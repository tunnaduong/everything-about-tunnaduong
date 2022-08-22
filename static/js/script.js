// Scripts for "Everything about Tunna Duong" website.
// Copyright 2022 Tunna Duong. All rights reserved.

const originalNum = parseInt($("#additional-number").text());
const newNum = originalNum + 1;

function responsivePeopleSection() {
  var sectionWidth = $(".main--section-3").width();
  var flag = 0;
  if (sectionWidth < 250 && flag == 0) {
    flag = 1;
    $(".people-i-met > img").last().css("display", "none");
    $("#additional-number").text("+" + newNum);
  } else {
    $(".people-i-met > img").last().css("display", "block");
    $("#additional-number").text("+" + originalNum);
  }
}

responsivePeopleSection();

$(window).on("resize", responsivePeopleSection);

function toggleNav() {
  $("#myNav").toggleClass("full-height");
  $(".overlay-below").toggleClass("full-height");
  $(".menu-button-container").toggleClass("menu-active");
  $(".overlay-content").toggleClass("push-up");
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
