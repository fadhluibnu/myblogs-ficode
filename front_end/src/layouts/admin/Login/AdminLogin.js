import "bootstrap/dist/css/bootstrap.css";
import "./css/style.css";
import "./css/sign-in.css";
import "bootstrap/dist/js/bootstrap";
import logo from "../../../assets/logo.png";

export default function AdminLogin() {
  return (
    <div className="body">
      <div class="text-center m-auto">
        <main class="form-signin w-100 m-auto">
          <form>
            <img class="mb-4" src={logo} alt="" width="72" />
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
              <input
                type="email"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input
                type="password"
                class="form-control"
                id="floatingPassword"
                placeholder="Password"
              />
              <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me" /> Remember me
              </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">
              Sign in
            </button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
          </form>
        </main>
      </div>
    </div>
  );
}
