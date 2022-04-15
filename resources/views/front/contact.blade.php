@extends('front.layouts.master')
@section('title','İletişim')
@section('bg','https://image.freepik.com/free-photo/contact-us_36325-2135.jpg')
@section('content')
    <div class="col-md-10 col-lg-8 col-xl-7">
        @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

            @endif
        <h3>Bizimle bu sayfadan iletişime geçebilirsiniz.</h3>
        <div class="my-5">
            <form method="post" action="{{route('contact.post')}}">
                @csrf
                <div class="">
                    <label for="name">Ad Soyad</label>
                    <input class="form-control" value="{{old('name')}}" name="name" type="text" placeholder="Adınızı ve Soyadınızı buraya giriniz..." required />
                    <div class="invalid-feedback" data-sb-feedback="name:required">Ad Soyad</div>
                </div>
                <div class="">
                    <label for="email">Email adresi</label>
                    <input class="form-control" value="{{old('email')}}" name="email" type="email" placeholder="Emailinizi buraya giriniz..." required />
                </div>
                <div class="">
                    <label for="topic">Konu</label>
                    <select class="form-control" name="topic">
                        <option @if(old('topic')=="Bilgi") selected @endif value="bilgi">Bilgi</option>
                        <option @if(old('topic')=="Destek") selected @endif value="destek">Destek</option>
                        <option @if(old('topic')=="Genel") selected @endif value="genel">Genel</option>
                    </select>
                </div>
                <div class="">
                    <label for="message">Mesajınız</label>
                    <textarea class="form-control" name="message" rows="5" placeholder="Mesajınızı buraya giriniz..." style="height: 12rem" required>{{old('message')}}</textarea>
                </div>
                <br />
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Mesajınız gönderilemedi!</div></div>
                <!-- Submit Button-->
                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Gönder</button>
            </form>
        </div>
    </div>

@endsection





