@extends('layout.main')

@section('content')
    <div class="mt-6 max-w-md mx-auto px-4">
        @if (isset($success) && $success)
            <i class="fas fa-check-circle text-[var(--black)] text-center text-[40px] block"></i>
            <h1 class="text-[var(--black)] text-center text-2xl mt-4">Gửi thành công!</h1>
        @else
            <form action="" method="POST" id="form_luubut">
                <div class="mt-3">
                    <label for="name" class="text-[var(--black)]">*Họ và tên:</label><br>
                    <input class="input" type="text" name="name" id="name" required>
                </div>
                <div class="mt-3">
                    <label for="email" class="text-[var(--black)]">Email:</label><br>
                    <input class="input" type="email" name="email" id="email">
                </div>
                <div class="mt-3">
                    <label for="come_from" class="text-[var(--black)]">Đến từ:</label><br>
                    <input class="input" type="text" name="come_from" id="come_from">
                </div>
                <div class="mt-3">
                    <label for="web" class="text-[var(--black)]">Trang web của bạn (FB, YouTube,
                        Instagram,...):</label><br>
                    <input class="input" type="text" name="web" id="web">
                </div>
                <div class="mt-3">
                    <p class="text-[var(--black)]">Bạn là:</p>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male" class="text-[var(--black)]">Nam</label><br>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female" class="text-[var(--black)]">Nữ</label>
                </div>
                <div class="mt-3">
                    <p class="text-[var(--black)]">Chúng mình từng gặp nhau chưa?</p>
                    <input type="radio" id="olog" name="have_we_met" value="only_look_or_greet">
                    <label for="olog" class="text-[var(--black)]">Mới chỉ chào hỏi/nhìn từ xa thôi</label><br>
                    <input type="radio" id="talked" name="have_we_met" value="talked">
                    <label for="talked" class="text-[var(--black)]">Nói chuyện với nhau rồi</label><br>
                    <input type="radio" id="notyet" name="have_we_met" value="notyet">
                    <label for="notyet" class="text-[var(--black)]">Chưa</label>
                </div>
                <div class="mt-3">
                    <label for="why_we_met" class="text-[var(--black)]">Sao mình quen nhau vậy?</label><br>
                    <input class="input" type="text" name="why_we_met" id="why_we_met">
                </div>
                <div class="mt-3">
                    <label for="our_memory" class="text-[var(--black)]">Một kỉ niệm giữa chúng mình:</label><br>
                    <input class="input" type="text" name="our_memory" id="our_memory">
                </div>
                <div class="mt-3">
                    <label for="i_am" class="text-[var(--black)]">Đối với bạn, tớ là một người:</label><br>
                    <input class="input" type="text" name="i_am" id="i_am">
                </div>
                <div class="mt-3">
                    <label for="dislike" class="text-[var(--black)]">Điều bạn không thích ở tớ:</label><br>
                    <input class="input" type="text" name="dislike" id="dislike">
                </div>
                <div class="mt-3">
                    <label for="some_lines" class="text-[var(--black)]">Vài dòng cho tớ:</label><br>
                    <input class="input" type="text" name="some_lines" id="some_lines">
                </div>
                <div class="mt-3">
                    <label for="signature_box" class="text-[var(--black)]">*Chữ ký của bạn:</label><br>
                    <canvas class="signature_box" id="signature_box" height="300"
                        style="touch-action: none;"></canvas>
                    <button type="button"
                        style="background: #3498db;border-radius: 28px;color: #ffffff;font-size: 14px;padding: 5px 10px 5px 10px;text-decoration: none;-webkit-transition: background 0.2s ease, color 0.2s ease;transition: background 0.2s ease, color 0.2s ease"
                        id="draw"
                        onclick="var ctx = canvas.getContext('2d');
    console.log(ctx.globalCompositeOperation);
    ctx.globalCompositeOperation = 'source-over';">Vẽ</button>
                    <button type="button"
                        style="background: #3498db;border-radius: 28px;color: #ffffff;font-size: 14px;padding: 5px 10px 5px 10px;text-decoration: none;-webkit-transition: background 0.2s ease, color 0.2s ease;transition: background 0.2s ease, color 0.2s ease"
                        id="erase"
                        onclick="var ctx = canvas.getContext('2d');
    ctx.globalCompositeOperation = 'destination-out';">Tẩy</button>
                    <button type="button"
                        style="background: #3498db;border-radius: 28px;color: #ffffff;font-size: 14px;padding: 5px 10px 5px 10px;text-decoration: none;-webkit-transition: background 0.2s ease, color 0.2s ease;transition: background 0.2s ease, color 0.2s ease"
                        id="clear" onclick="signaturePad.clear();">Xoá</button>
                    <input type="hidden" name="signature_data" id="dulieu">
                </div>
                <div class="mt-3">
                    <div class="cf-turnstile" data-sitekey="0x4AAAAAAAwrQ4yUSma0J-NO"></div>
                    <a id="send-btn" class="btn">Gửi <i class="fas fa-paper-plane"></i></a>
                </div>
            </form>
        @endif
    </div>
@endsection

@push('scripts')
<script>
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

function resizeWidth() {
  var existingWidth = $(document).data("resize-width");
  var newWidth = $(document).width();
  if (existingWidth != newWidth) {
    resizeCanvas();
    $(document).data("resize-width", newWidth);
  }
}

$(window).resize(resizeWidth);

resizeCanvas();

document.addEventListener("DOMContentLoaded", function () {
    async function sendWriting() {
    var x = document.forms["form_luubut"]["name"].value;
    if (x == "") {
        alert("Hãy điền tên vì trường này rất quan trọng với mình.");
        return false;
    }

    if (signaturePad.isEmpty()) {
        alert("Hãy vẽ chữ ký.");
        return false;
    }

    var data = signaturePad.toDataURL("image/png");
    console.log(data);
    document.getElementById("dulieu").value = data;

    // Get the Turnstile token
    var turnstileToken = document.getElementsByName("cf-turnstile-response")[0]
        .value;

    // Verify the Turnstile token
    var response = await fetch("/verify-turnstile", {
        method: "POST",
        headers: {
        "Content-Type": "application/x-www-form-urlencoded",
        },
        body: new URLSearchParams({ token: turnstileToken }).toString(),
    });

    var result = await response.json();

    if (result.success) {
        // If verification is successful, submit the form
        document.getElementById("form_luubut").submit();
        return true;
    } else {
        // Handle verification failure
        alert("Vui lòng xác minh rằng bạn không phải là robot.");
        return false;
    }
    }
    // Attach the sendWriting function to the form submission or a button click
    document.getElementById("send-btn").addEventListener("click", sendWriting);
});
</script>
@endpush