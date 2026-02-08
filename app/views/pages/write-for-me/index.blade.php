@extends('layout.main')

@section('title', 'Viết cho mình')

@section('content')
    <div class="write-form-container">
        @if (isset($success) && $success)
            <div class="success-message">
                <i class="fas fa-check-circle text-[var(--black)] text-center text-[40px] block"></i>
                <h1 class="text-[var(--black)] text-center text-2xl mt-4">Gửi thành công!</h1>
                <p>Cảm ơn bạn đã viết cho mình. Mình sẽ xem xét sớm nhất có thể.</p>
            </div>
        @else
            <form action="" method="POST" id="form_luubut" class="write-form">
                <!-- Row 1: Name and Email -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="name" class="form-label">*Họ và tên:</label>
                        <input class="form-input" type="text" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email:</label>
                        <input class="form-input" type="email" name="email" id="email">
                    </div>
                </div>

                <!-- Row 2: Come from and Website -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="come_from" class="form-label">Đến từ:</label>
                        <input class="form-input" type="text" name="come_from" id="come_from">
                    </div>
                    <div class="form-group">
                        <label for="web" class="form-label">Trang web của bạn (FB, YouTube, Instagram,...):</label>
                        <input class="form-input" type="text" name="web" id="web">
                    </div>
                </div>

                <!-- Row 3: Gender -->
                <div class="form-row">
                    <div class="form-group">
                        <p class="form-label">Bạn là:</p>
                        <div class="radio-group">
                            <label class="radio-label">
                                <input type="radio" id="male" name="gender" value="male">
                                <span>Nam</span>
                            </label>
                            <label class="radio-label">
                                <input type="radio" id="female" name="gender" value="female">
                                <span>Nữ</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="form-label">Chúng mình từng gặp nhau chưa?</p>
                        <div class="radio-group">
                            <label class="radio-label">
                                <input type="radio" id="olog" name="have_we_met" value="only_look_or_greet">
                                <span>Mới chỉ chào hỏi/nhìn từ xa thôi</span>
                            </label>
                            <label class="radio-label">
                                <input type="radio" id="talked" name="have_we_met" value="talked">
                                <span>Nói chuyện với nhau rồi</span>
                            </label>
                            <label class="radio-label">
                                <input type="radio" id="notyet" name="have_we_met" value="notyet">
                                <span>Chưa</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Row 4: Why we met and Our memory -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="why_we_met" class="form-label">Sao mình quen nhau vậy?</label>
                        <input class="form-input" type="text" name="why_we_met" id="why_we_met">
                    </div>
                    <div class="form-group">
                        <label for="our_memory" class="form-label">Một kỉ niệm giữa chúng mình:</label>
                        <input class="form-input" type="text" name="our_memory" id="our_memory">
                    </div>
                </div>

                <!-- Row 5: I am and Dislike -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="i_am" class="form-label">Đối với bạn, tớ là một người:</label>
                        <input class="form-input" type="text" name="i_am" id="i_am">
                    </div>
                    <div class="form-group">
                        <label for="dislike" class="form-label">Điều bạn không thích ở tớ:</label>
                        <input class="form-input" type="text" name="dislike" id="dislike">
                    </div>
                </div>

                <!-- Row 6: Some lines (full width) -->
                <div class="form-row">
                    <div class="form-group full-width">
                        <label for="some_lines" class="form-label">Vài dòng cho tớ:</label>
                        <input class="form-input" type="text" name="some_lines" id="some_lines">
                    </div>
                </div>

                <!-- Row 7: Signature -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="signature_box" class="form-label">*Chữ ký của bạn:</label>
                        <div class="signature-container">
                            <canvas class="signature_box" id="signature_box" height="300"
                                style="touch-action: none;"></canvas>
                            <div class="signature-buttons">
                                <button type="button" class="signature-btn" id="draw"
                                    onclick="var ctx = canvas.getContext('2d');
                                    console.log(ctx.globalCompositeOperation);
                                    ctx.globalCompositeOperation = 'source-over';">Vẽ</button>
                                <button type="button" class="signature-btn" id="erase"
                                    onclick="var ctx = canvas.getContext('2d');
                                    ctx.globalCompositeOperation = 'destination-out';">Tẩy</button>
                                <button type="button" class="signature-btn" id="clear"
                                    onclick="signaturePad.clear();">Xoá</button>
                            </div>
                        </div>
                        <input type="hidden" name="signature_data" id="dulieu">
                    </div>
                    <div class="form-group">
                        <!-- Empty column for balance -->
                    </div>
                </div>

                <!-- Row 8: Captcha and Submit -->
                <div class="form-row">
                    <div class="form-group full-width">
                        <div class="cf-turnstile" data-sitekey="0x4AAAAAAAwrQ4yUSma0J-NO"></div>
                        <a id="send-btn" onclick="sendWriting()" class="btn">Gửi <i
                                class="fas fa-paper-plane"></i></a>
                    </div>
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

            document.getElementById("form_luubut").submit();
            return true;
        }
    </script>
@endpush
