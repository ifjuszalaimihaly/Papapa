@extends('layouts.auth')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <form action="#">
                    <legend>Textus</legend>
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="book">Könyv</label>
                            <select name="" id="" class="form-control">
                                @foreach($books as $book)
                                    <option value="{{$book->id}}">{{$book->book_name_short}}
                                        - {{$book->book_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-2">
                            <label for="book">Fejezet</label>
                            <select name="" id="" class="form-control">
                                <option value="">1</option>
                                <option value="">2</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <label for="book">Kezdő vers</label>
                            <select name="" id="" class="form-control">
                                <option value="">1</option>
                                <option value="">2</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <label for="book">Befejező vers</label>
                            <select name="" id="" class="form-control">
                                <option value="">1</option>
                                <option value="">2</option>
                            </select>
                        </div>
                    </div>
                    <legend>Alkalom</legend>
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="book">Év</label>
                            <select name="" id="" class="form-control">
                                <option value="">2016</option>
                                <option value="">2017</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="book">Ünnep</label>
                            <select name="" id="" class="form-control">
                                <option value="">Újév</option>
                                <option value="">Az Esztendő első vasárnapja</option>
                            </select>
                        </div>
                    </div>
                    <legend>Igehirdetés</legend>
                    <div class="form-group row">
                        <div class="col-12">
                            <textarea name="" id="" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-10">
                            <legend>Látható <input type="checkbox"></legend>
                        </div>
                        <div class="col-1">
                            <input type="submit" value="Mentés">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=58vhsltso3azsov51ddygvwz21bw8y1ck6nmpr78w1vsgch4"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            language_url: '{{asset('js/tinymce_languages/langs/hu_HU.js')}}'
        });
    </script>
@endsection