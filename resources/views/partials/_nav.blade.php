<div style='max-width:880px'  class="container">
    <header class="blog-header ">
        <div class="d-flex flex-row-reverse align-items-end">
            <div class="login ">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button  class="btn btn-sm" >Logi välja</button >
                    </form>
                 @else
                    <a class="btn btn-sm" href="/login">Logi sisse</a>
                @endauth 
            </div>
        </div>
        <div class="d-flex flex-row">
            <div class=" text-left">
                <a class="blog-header-titel text-nowrap text-dark" href="/">Logiraamat</a>
            </div>
        </div>
    </header>
    <div class="d-flexi navi">
        <nav class="d-inline-flex justify-content-between">
            @auth
            <a class="p-2 sub-section" href="/posts/create ">Lisa postitus</a>
            @endauth 
            <a class="p-2 sub-section" href="#">Retseptid</a>
            <a class="p-2 sub-section" href="#">Lingid</a>
        </nav>
        <hr>
    </div>