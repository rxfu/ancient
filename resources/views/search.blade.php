<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>廣西師範大學古籍書目檢索平臺</title>

        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid px-0">
            <a href="{{ url('/') }}" class="logo-title">
                <div class="logo">
                    <h1 class="text-center text-dark">廣西師範大學古籍書目檢索平臺</h1>
                </div>
            </a>
        </div>

        <div class="container">
            <header role="header" id="header" class="pt-3">
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <form method="get" action="{{ url('/books') }}">
                            <div class="input-group">
                                <input type="text" name="q" placeholder="僅支援繁體字檢索" class="form-control" value="{{ $keyword }}">
                                <div class="input-group-append">
                                    <input type="submit" value="檢索" class="btn btn-primary text-white">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </header>

            <main role="main" id="main" class="row justify-content-center">
                <div class="col-sm-8">
                    @if (is_null($books))
                        <blockquote class="intro p-4 mt-4">
                            <h4 class="text-center">廣西師大圖書館“館藏古籍查詢系統”使用說明</h4>

                            <ol>
                                <li>
                                    本查詢系統只設有書名、作者兩個基本檢索點，提供了本館所藏古籍的書名、著者、著作方式、版本項、函數、卷/冊數、存卷/冊數、部/套數、四部分類號、附注以及索書號、財產號等基本資訊。
                                </li>
                                <li>
                                    本系統依據原有卡片目錄繁體字著錄，讀者查詢時需使用繁體字檢索。
                                </li>
                                <li>
                                    凡原卡片目錄中出現的異體字，一律統一於常見繁體字，如：“菴”用“庵”，“藳”用“稿”，“劄”用“札”，“攷”用“考”，“誌”用“志”……。
                                </li>
                                <li>
                                    本系統還可用于叢書書名、叢書子目（叢書子目書名、叢書子目著者）查詢。
                                </li>
                            </ol>
                        </blockquote>
                    @else
                        <div class="py-1">
                            <small class="text-muted">共檢索到 {{ $books->total() }} 條符合條件的書目</small>
                        </div>
                        <div class="list-group">
                            @foreach ($books as $book)
                                @php
                                    $keywords = str_replace(' ', '|', $keyword)
                                @endphp

                                <div class="list-group-item flex-column align-items-start p-0">
                                    <div class="d-flex">
                                        <h4 class="text-title mr-2">@highlight($book->title, $keywords)</h4>
                                        <strong class="text-success align-self-center">@highlight($book->callno, $keywords)</strong>
                                    </div>
                                    <div class="text-info mb-2">@highlight($book->author, $keywords)</div>

                                    <div class="row">
                                        <small class="col">
                                            <dl class="row">
                                                <dt class="col-sm-3">財產號</dt>
                                                <dd class="col-sm-9">@highlight($book->propno, $keywords)</dd>
                                                <dt class="col-sm-3">書目級別</dt>
                                                <dd class="col-sm-9">@highlight($book->level, $keywords)</dd>
                                                <dt class="col-sm-3">版刻項</dt>
                                                <dd class="col-sm-9">@highlight($book->version, $keywords)</dd>
                                                <dt class="col-sm-3">版本類型</dt>
                                                <dd class="col-sm-9">@highlight($book->type, $keywords)</dd>
                                                <dt class="col-sm-3">四部分類</dt>
                                                <dd class="col-sm-9">@highlight($book->classification, $keywords)</dd>
                                            </dl>
                                        </small>
                                        <small class="col">
                                            <dl class="row">
                                                <dt class="col-sm-3">函數</dt>
                                                <dd class="col-sm-9">@highlight($book->case, $keywords)</dd>
                                                <dt class="col-sm-3">卷/冊數</dt>
                                                <dd class="col-sm-9">@highlight($book->volume, $keywords)</dd>
                                                <dt class="col-sm-3">存卷/冊</dt>
                                                <dd class="col-sm-9">@highlight($book->savevol, $keywords)</dd>
                                                <dt class="col-sm-3">部/套數</dt>
                                                <dd class="col-sm-9">@highlight($book->series, $keywords)</dd>
                                                <dt class="col-sm-3">附注</dt>
                                                <dd class="col-sm-9">@highlight($book->note, $keywords)</dd>
                                            </dl>
                                        </small>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{ $books->appends($_GET)->links() }}
                    @endif
                </div>
            </main>


            <footer role="footer" id="footer" class="row justify-content-center">
                &copy; {{ date('Y') }}. <a href="http://www.library.gxnu.edu.cn" class="text-dark">廣西師範大學圖書館</a>.
            </footer>
        </div>
    </body>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
