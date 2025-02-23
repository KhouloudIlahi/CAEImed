<x-guest-layout>
    <!-- Inclure le CSS personnalisé avec le bon chemin pour l'image -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        * {
            margin: 0;
            padding: 0;
            font-family: 'poppins', sans-serif;
        }
        section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            background: url('{{ asset('assets/img/background6.jpg') }}') no-repeat;
            background-position: center;
            background-size: cover;
        }
        .form-box {
            position: relative;
            width: 400px;
            height: 450px;
            background: transparent;
            border: 2px solid rgba(255,255,255,0.5);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h2 {
            font-size: 2em;
            color: #fff;
            text-align: center;
        }
        .inputbox {
            position: relative;
            margin: 30px 0;
            width: 310px;
            border-bottom: 2px solid #fff;
        }
        .inputbox label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #fff;
            font-size: 1em;
            pointer-events: none;
            transition: .5s;
        }
        input:focus ~ label,
        input:valid ~ label {
            top: -5px;
        }
        .inputbox input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            padding: 0 35px 0 5px;
            color: #fff;
        }
        .inputbox ion-icon {
            position: absolute;
            right: 8px;
            color: #fff;
            font-size: 1.2em;
            top: 20px;
        }
        .forget {
            margin: -15px 0 15px;
            font-size: .9em;
            color: #fff;
            display: flex;
            justify-content: space-between;
        }
        .forget label input {
            margin-right: 3px;
        }
        .forget label a {
            color: #fff;
            text-decoration: none;
        }
        .forget label a:hover {
            text-decoration: underline;
        }
        button {
            width: 100%;
            height: 40px;
            border-radius: 40px;
            background: #fff;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
        }
        .register {
            font-size: .9em;
            color: #fff;
            text-align: center;
            margin: 25px 0 10px;
        }
        .register p a {
            text-decoration: none;
            color: #fff;
            font-weight: 600;
        }
        .register p a:hover {
            text-decoration: underline;
        }
        /* Style pour les erreurs */
        .mt-2 {
            color: red;
            font-size: 0.8em;
        }
    </style>

    <!-- Section sans style inline (géré par le CSS) -->
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="{{ route('login') }}">
                    @csrf <!-- Sécurité CSRF -->

                    <!-- Titre -->
                    <h2>Login</h2>

                    <!-- Email -->
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus>
                        <label for="email">Email</label>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Mot de passe -->
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="password">Mot de passe</label>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Se souvenir de moi -->
                    <div class="forget">
                        <label for="remember_me">
                            <input type="checkbox" name="remember" id="remember_me"> Se souvenir de moi
                        </label>
                    </div>

                    <!-- Bouton Connexion -->
                    <button type="submit">Log in</button>

                    <!-- Lien Mot de passe oublié -->
                    <div class="register">
                        <p>Mot de passe oublié ?
                            <br>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Réinitialiser le mot de passe</a>
                            @endif
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Scripts Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</x-guest-layout>
