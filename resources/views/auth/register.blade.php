<x-layout>



    <div id="RegistrazioneUtente" class="RegistrazioneUtente">
        <div class="RegistrazioneContainer">

            <div class="containerKeri" id="Kericontainer">

                <div class="form-container sign-up-container">
                    <div
                        style="display: flex; justify-content: end;align-items: start; position: absolute; right: 10px;top:5px">
                        <i style="background-color: white;" id="CloseLogin" onclick="CloseLogin()"
                            class="bi bi-x-circle"></i>
                    </div>

                    <form action="/register" method="POST">
                        @csrf
                        <h1 style="background-color: white ">Registrati</h1>
                        <div style="background-color: white " class="social-container">
                            <a style="background-color: white " href="https://www.facebook.com/" class="social"><i
                                    style="background-color: white " id="social" class="bi bi-facebook"></i></a>
                            <a style="background-color: white " href="https://www.instagram.com/" class="social"><i
                                    style="background-color: white " id="social" class="bi bi-instagram"></i></a>
                            <a style="background-color: white " href="https://twitter.com/?lang=it" class="social"><i
                                    style="background-color: white " id="social" class="bi bi-twitter-x"></i></a>
                        </div>
                        <span style="background-color: white ">oppure inserisci i dati</span>

                        <input name="name" type="text" placeholder="Nome" />

                        <input name="email" type="email" placeholder="Email" />

                        <input name="password" type="password" placeholder="Password" />

                        <input name="password_confirmation" type="password" placeholder="Conferma Password" />

                        <button type="submit">Crea account</button>
                    </form>
                </div>

                <div class="form-container sign-in-container">
                    <form action="/login" method="POST">
                        @csrf
                    <h1 style="background-color: white">Accedi</h1>
                        <div style="background-color: white" class="social-container">
                            <a style="background-color: white" href="https://www.facebook.com/" class="social"><i style="background-color: white" id="social"
                                    class="bi bi-facebook"></i></a>
                            <a style="background-color: white" href="https://www.instagram.com/" class="social"><i style="background-color: white" id="social"
                                    class="bi bi-instagram"></i></a>
                            <a style="background-color: white" href="https://twitter.com/?lang=it" class="social"><i style="background-color: white" id="social"
                                    class="bi bi-twitter-x"></i></a>
                        </div>
                        <span style="background-color: white" > oppure usa il tuo account
                        </span>
                        <input name="email" type="email" placeholder="Email" />
                    @error('email') <div style="background-color: white"><span style="color: rgb(243, 70, 70);background-color: white">{{ $message }}</span></div> @enderror
                    <input name="password" type="password" placeholder="Password" />
                    @error('password') <div style="background-color: white"><span style="color: rgb(243, 70, 70);background-color: white">{{ $message }}</span></div> @enderror
                        <a style="background-color: white" href="">Hai dimenticato la password?</a>
                        <button type="submit">Login</button>
                    </form>
                </div>

                <div class="overlay-container">
                    <div class="overlay">
                        <div style="background-color: black" class="overlay-panel overlay-left">
                            <h1 style="font-weight: bold;
                    margin: 0;background-color: black">
                                Bentornato!</h1>
                            <p
                                style="	font-size: 14px;
                            font-weight: 100;
                            line-height: 20px;
                            letter-spacing: 0.5px;
                            margin: 20px 0 30px;background-color: black">
                                Effettua il login con i tuoi dati.</p>
                            <button class="ghost" id="signIn">Login</button>
                        </div>
                        <div style="background-color: black" class="overlay-panel overlay-right">
                            <div
                                style="display: flex; justify-content: end;align-items: start; position: absolute; right: 10px;top:5px">
                                <i style="background-color: rgb(0, 0, 0)" onclick="CloseLogin()" id="CloseLogin2"
                                    class="bi bi-x-circle"></i>
                            </div>
                            <h1 style="font-weight: bold;
                    margin: 0;background-color: black">Ciao!
                            </h1>
                            <p
                                style="	font-size: 14px;
                        font-weight: 100;
                        line-height: 20px;
                        letter-spacing: 0.5px;
                    margin: 20px 0 30px;background-color: black">
                                Inserisci i tuoi dati e inizia il viaggio con noi.</p>
                            <button class="ghost" id="signUp">Crea account</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-layout>
