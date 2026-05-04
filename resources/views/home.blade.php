@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">

<!-- NAVBAR SCROLL -->
<div class="navbar-scroll" id="navbarScroll">
    <div class="nav-left">
        <a href="#1stpage">
            <img src="{{ asset('images/logo2.png') }}" alt="UEL Logo 2">
        </a>
    </div>

    <div class="nav-center">
        University Life of Diễm Trinh
    </div>

    <div class="nav-right">
        <a href="#about">Về mình</a>
        <a href="#film">Thước phim</a>
        <a href="#projects">Ngày quan trọng</a>
        <a href="#contact">Lưu bút</a>
    </div>
</div>

<!-- Section 1 -->
<div class="hero">
    <!-- NAVBAR -->
    <div class="navbar">
        <div class="logo">
            <a href="http://127.0.0.1:8000/">
                <img src="{{ asset('images/logouel.png') }}" alt="UEL Logo" id="1stpage">
            </a>
        </div>

        <div class="menu">
            <a href="#about">Về mình</a>
            <a href="#film">Thước phim</a>
            <a href="#projects">Ngày quan trọng</a>
            <a href="#contact">Lưu bút</a>
        </div>
    </div>

    <!-- HERO CONTENT -->
    <div class="hero-content">
        <h1>
            <span class="small-title">University Life of</span>
            <span class="big-title">Diễm Trinh</span>
        </h1>
        <p class="description">
            Mình là Mai Thị Diễm Trinh, sinh viên năm cuối (sắp hết) tại UEL. Trước khi dừng chân tại UEL, cùng nhìn lại các khoảnh khác con bé này đã chập chững bước qua cùng UEL nhé.....        </p>
    </div>
</div>

<!-- Section 2 -->
<section class="about-section" id="about">
    <div class="about-container">

        <!-- TEXT -->
        <div class="about-text">
            <h2>VỀ MÌNH</h2>

            <p>
                Mình là Mai Thị Diễm Trinh, sắp trở thành Tân cử nhân ngành Kinh doanh quốc tế tại Trường Đại học Kinh tế - Luật, ĐHQG-HCM. Đứng trước ngưỡng cửa tốt nghiệp, mình là một người trẻ đang chuẩn bị bước vào thị trường lao động với nhiều mơ mộng, nhưng cũng dần học cách nhìn thế giới thực tế hơn. Bên cạnh hành trình học tập, mình tự hào về quãng thời gian được trở thành cán bộ Đoàn – nơi mình học cách làm việc với con người, hiểu giá trị của tập thể và rèn luyện sự kiên trì trong những điều mình theo đuổi. Những trải nghiệm đó đã góp phần định hình được Diễm Trinh ngày hôm nay.
            </p>

            <p>
                Gần bốn năm đại học đối với mình không chỉ là giảng đường, mà còn là hành trình hiểu bản thân, thử sai và trưởng thành từng chút một. Trang web này là nơi mình lưu lại những điều đã đi qua, những điều đang học và cả những điều mình vẫn đang tìm kiếm - tuy chưa hoàn hảo nhưng là những điều chân thật nhất.
            </p>
        </div>

        <!-- IMAGE -->
        <div class="about-image">
            <img src="{{ asset('images/aboutme2.svg') }}" alt="About Me">
        </div>

    </div>
</section>

<!-- Section 3 -->
<section class="film-section" id="film">
    <div class="film-container">

        <!-- TITLE -->
        <div class="film-header">
            <h2>THƯỚC PHIM</h2>
            <p>
                Có những hành trình khi đi qua, mình không nhận ra nó đặc biệt đến thế. Chỉ đến khi nhìn lại, từng khoảnh khắc mới dần hiện lên như một thước phim – có những ngày rất sáng, có những đoạn chông chênh và cả những khoảng lặng không tên. Bốn năm đại học của mình là như vậy. Một hành trình không hoàn hảo, nhưng đủ đầy để mình lớn lên...
            </p>
        </div>

        <!-- FILM -->
        <div class="film-grid">
            @for ($i = 1; $i <= 24; $i++)
                <div class="film-item">
                    <img src="{{ asset('images/film' . $i . '.jpg') }}" alt="Film {{ $i }}">
                </div>
            @endfor
        </div>

        <!-- NHỮNG NGÀY KHÔNG QUÊN -->
        @php
            $f1 = glob(public_path('images/f1/*.{jpg,jpeg,png,webp}'), GLOB_BRACE);
            sort($f1);
        @endphp

        <div class="film-block">
            <h3 class="film-line">Những ngày không quên</h3>
            <p> Gần bốn năm đại học là một hành trình đủ dài để mình đi qua nhiều điều – từ những lần bắt đầu còn nhiều bỡ ngỡ, đến những trải nghiệm khiến mình thay đổi, và cả những bài học mà có lẽ chỉ khi thật sự đi qua mới hiểu hết. Ở đó, mình gặp những con người khác nhau, có người đến rồi đi, có người ở lại và có những người trở thành một phần rất quan trọng trong hành trình này, cùng nhau đi qua những ngày rất bình thường nhưng lại trở thành ký ức rất đặc biệt. Không phải mọi khoảnh khắc đều hoàn hảo, nhưng chính những điều chưa trọn vẹn ấy lại khiến hành trình này trở nên đáng nhớ hơn bao giờ hết. Và khi nhìn lại, mình nhận ra: điều còn ở lại không chỉ là những gì mình đã làm, mà là những gì mình đã cảm nhận và những người đã cùng mình đi qua quãng đường này.</p>

            <div class="slider-new">
                <div class="slider-track">

                    @foreach ($f1 as $img)
                        <div class="slide">
                            <img src="{{ asset('images/f1/' . basename($img)) }}">
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <!-- IER -->
        @php
            $f2 = glob(public_path('images/f2/*.{jpg,jpeg,png,webp}'), GLOB_BRACE);
            sort($f2);
        @endphp

        <div class="film-block">
            <h3 class="film-line">Đoàn khoa Kinh tế đối ngoại</h3>
            <p> Đoàn Khoa chắc hẳn là điều không thể quen thuộc hơn với mình tại chặng đường Đại học. Cũng không biết cơ duyên nào giúp mình tìm được tổ chức này, những con người nơi đây, rồi chọn ở lại và gắn bó lâu đến thế. Đoàn Khoa lấy đi của mình nhiều, tiếng cười có, nước mắt có, nhưng cũng gửi lại cho mình rất nhiều. Nếu không có Đoàn Khoa, chắc Diễm Trinh cũng sẽ không có được những người anh chị, những người bạn, những đứa em luôn đồng hành và hỗ trợ hết mình, những mối quan hệ thân thương đến vậy. Đoàn Khoa cho mình trải nghiệm quý giá hơn bao giờ hết, là nơi được sai, được học, được sửa chữa và dần trưởng thành. Chắc cũng khó diễn tả hết bằng lời, nhưng được là một phần của Đoàn Khoa aka Gia đình Cá Ngựa chắc chắn là điều mình cảm thấy tự hào nhất khi nhớ về chặng đường Đại học.</p>

            <div class="slider-new">
                <div class="slider-track">

                    @foreach ($f2 as $img)
                        <div class="slide">
                            <img src="{{ asset('images/f2/' . basename($img)) }}">
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <!-- F6 K22408 -->
        @php
            $f3 = glob(public_path('images/f3/*.{jpg,jpeg,png,webp}'), GLOB_BRACE);
            sort($f3);
        @endphp

        <div class="film-block">
            <h3 class="film-line">F6 K22408</h3>
            <p>Những người đồng hành tuyệt dời nhất cùng tui fill hết bảng điểm ở MyUEL. Cũng không nhớ rõ nhóm này đi chung với nhau từ thời điểm chính xác nào nữa, hình như là tầm năm 2. 6 đứa, trộm vía cũng là số lượng thành viên nhóm thường gặp khi lập, cũng có những lúc Thầy/Cô bảo lập nhóm 5ng nhưng cũng ráng xin nhét thêm 1 đứa cho bằng được do không nỡ bỏ ai =)))))) hay cũng có lúc nhóm 8ng nhưng không tìm được ai ghép thêm nên mạnh dạn giữ số lượng 6, sau đó là nguyên đám chạy sấp mặt cho kịp deadline =))))))) 6 đứa - 6 kiểu, làm việc cũng cãi nhau giận nhau um xùm nhưng mà trộm vía vượt ải môn cuối cùng nhau được. Những buổi overnight cày cho xong bài, xong đứa nào cũng tàn tạ nhìn nhau, nhưng môn sau lại y như cũ do đứa nào cũng chill chill, nước đến chân mới có động lực làm @@ Nói chung là tôi iu nhóm này rất nhìu vì vẫn luôn support nhau, support dtrink trong thời gian tại UEL nhìu lắm.</p>

            <div class="slider-new">
                <div class="slider-track">

                    @foreach ($f3 as $img)
                        <div class="slide">
                            <img src="{{ asset('images/f3/' . basename($img)) }}">
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <!-- Trung tâm báo chí -->
        @php
            $f4 = glob(public_path('images/f4/*.{jpg,jpeg,png,webp}'), GLOB_BRACE);
            sort($f4);
        @endphp

        <div class="film-block">
            <h3 class="film-line">Trung tâm báo chí</h3>
            <p>Trung tâm báo chí là tổ hợp mình may mắn tìm được vào năm 3. Những con người ở các Khoa khác nhau, hữu duyên tìm được nhau nhờ cùng màu áo Đoàn. Mình cũng không nghĩ là mấy đứa mình sẽ chơi được đến giờ, ban đầu connect cũng chỉ vì công việc, xong cũng bằng cách nào đó lại đồng hành với nhau nhiều hơn nữa. Cũng có những khoảnh khắc, những cảm giác ít ai hiểu được nhưng TTBC lại là điểm tựa để mình sẵn sàng chia sẻ và là nơi luôn có những vòng tay an ủi mình.</p>
            <p> Có những mối quan hệ bắt đầu rất tình cờ – không hẹn trước, không có lý do rõ ràng, chỉ là gặp nhau rồi ở lại. Tụi mình cũng vậy. Rồi từ lúc nào, chỉ là những buổi đi chơi, đi ăn, đi thả diều, những câu chuyện vu vơ, những lần ở bên nhau đủ lâu để hiểu nhau hơn một chút. Nhưng có lẽ, điều đáng quý nhất không phải là đã làm gì cùng nhau, mà là đã ở bên nhau trong một khoảng thời gian đủ dài để trở thành ký ức đẹp.</p>

            <div class="slider-new">
                <div class="slider-track">

                    @foreach ($f4 as $img)
                        <div class="slide">
                            <img src="{{ asset('images/f4/' . basename($img)) }}">
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 4 -->
<section class="important-section" id="projects">
    <div class="important-container">
        <!-- LEFT -->
        <div class="important-image">
            <img src="{{ asset('images/invitation.svg') }}" alt="Invitation">
        </div>

        <!-- RIGHT -->
        <div class="important-content">
            <h2>NGÀY<br>QUAN TRỌNG</h2>
            <p>Gần bốn năm đại học của mình là một hành trình như thế, với đủ những lần bắt đầu, những lần chông chênh và cả những lần trưởng thành. Hành trình ấy sẽ không thể trọn vẹn nếu thiếu đi sự đồng hành từ những người thương yêu luôn động viên, giúp đỡ con/em/mình. Giờ đây, khi thước phim ấy sắp khép lại, con/em/mình hy vọng sẽ có thể cùng mọi người - những người thương yêu ấy ở bên trong khoảnh khắc ý nghĩa này <3</p>
        </div>
    </div>
</section>

@php
    $messages = \App\Models\Guestbook::latest()
        ->paginate(9)
        ->withQueryString()
        ->fragment('section6');
@endphp
<!-- Section 5 -->
<section class="guestbook-section" id="contact">
    <div class="guestbook-container">

        <h2>LƯU BÚT IU THƯƠNG</h2>

        <p class="guestbook-desc">
            Mình để lại một góc nhỏ này để gom lại những điều mình quý - từ mọi người.
            Có thể là một lời chúc, một kỷ niệm, hay chỉ là vài dòng bạn nghĩ đến mình.
            Với mình, tất cả những điều này đều thật iu thương và đáng quý. Cảm ơn vì đã ở đây &lt;3
        </p>

        <form class="guestbook-form" method="POST" action="{{ route('guestbook.store') }}" enctype="multipart/form-data">
            @csrf

            <label class="label">Mình có thể gọi bạn là?</label>
            <input type="text" name="name" required>

            <label class="label">Hãy gửi đến một tấm hình thật xinh nhóo</label>
            <input type="file" name="image" accept="image/*">

            <label>
                <span class="label">Lời iu thương:</span> <br>
                <span class="sub-label">Gửi gắm vài lời nhắn nhủ, kỷ niệm hay chỉ là vài dòng bạn nghĩ đến mình. Mình sẽ trân trọng tất cả những điều này &lt;3</span>
            </label>
            <textarea name="message" rows="4" required></textarea>

            <button type="submit">Gửi đi</button>
        </form>
    </div>
</section>

<!-- Section 6 -->
<section class="guestbook-display" id="section6">
    <div class="guestbook-container6">

        <h2 class="guest-title">NHỮNG LỜI IU THƯƠNG</h2>

        <div class="guestbook-list">
            @foreach ($messages as $msg)
                <div class="guest-card new-card">
                    <!-- Avatar -->
                    <div class="guest-avatar">
                        @if ($msg->image)
                            <img src="{{ asset('storage/' . $msg->image) }}">
                        @else
                            <div class="avatar-placeholder">
                                {{ strtoupper(substr($msg->name ?? 'A', 0, 1)) }}
                            </div>
                        @endif
                    </div>

                    <!-- Content -->
                    <div class="guest-content">
                        <div class="guest-message">
                            “{{ $msg->message ?? '...'}}”
                        </div>

                        <div class="guest-name">
                            {{ $msg->name ?? 'Ẩn danh'}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            @if ($messages->hasPages())
                <div class="custom-pagination">

                    <!-- Prev -->
                    @if ($messages->currentPage() > 1)
                        <a href="?page={{ $messages->currentPage() - 1 }}#section6">‹</a>
                    @endif

                    <!-- Current -->
                    <span class="current">{{ $messages->currentPage() }}</span>

                    <!-- Next -->
                    @if ($messages->hasMorePages())
                        <a href="?page={{ $messages->currentPage() + 1 }}#section6">›</a>
                    @endif

                </div>
            @endif
        </div>

        <!-- 🔥 ĐƯA FOOTER VÀO ĐÂY -->
        <div class="guest-footer">
            <span class="footer-text">Cảm ơn cả nhà đã ghé thăm khu vườn kỷ niệm của mình. Mong rằng những thước phim và câu chuyện nhỏ tại đây đã đem lại cho mọi người một chút niềm vui. Hẹn gặp lại nhóoooo</span>
        </div>

    </div>
</section>

@if(session('scrollTo'))
<script>
    window.addEventListener("load", function () {
        const target = document.getElementById("{{ session('scrollTo') }}");
        if (target) {
            target.scrollIntoView({ behavior: "smooth" });
        }
    });
</script>
@endif

@endsection