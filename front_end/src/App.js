import { BrowserRouter, Routes, Route } from "react-router-dom";
import Home from "./layouts/client/Home/Main";
import Blogs from "./layouts/client/Blogs/Main";
import Layout from "./layouts/client/Layout";
import Kategori from "./layouts/client/Kategori/Main";
import Playlist from "./layouts/client/Playlist/Main";
import AdminLogin from "./layouts/admin/Login/AdminLogin";
function App() {
  return (
    <>
      <BrowserRouter>
        <Routes>
          <Route exact path="/login" element={<AdminLogin />} />
          <Route element={<Layout />}>
            <Route index element={<Home />} />
            <Route path="blogs" element={<Blogs />} />
            <Route path="kategori" element={<Kategori />} />
            <Route path="playlist" element={<Playlist />}></Route>
          </Route>
        </Routes>
      </BrowserRouter>
      {/* <BrowserRouter basename="admin">
        <Routes>
          <Route path="/admin/login" element={<Login />}></Route>
        </Routes>
      </BrowserRouter> */}
    </>
    // <>
    //   <Router>
    //     <nav className="navbar navbar-expand-lg bg-white">
    //       <div className="container" id="real-navbar">
    //         <img
    //           src={hamburgerMenu}
    //           className="hamburger-menu"
    //           alt="logo"
    //           onClick={mobileNav}
    //         />
    //         <a
    //           className="navbar-brand me-sm-auto m-lg-auto ms-sm-3 ms-lg-0"
    //           href="#"
    //         >
    //           <img src={logo} alt="Bootstrap" width="34" />
    //         </a>
    //         <div
    //           className="navbar-collapse d-none d-lg-inline-block"
    //           id="navbarNavDropdown"
    //         >
    //           <ul className="navbar-nav m-auto">
    //             <li className="nav-item">
    //               <Link className="nav-link active" to="/">
    //                 Home
    //               </Link>
    //             </li>
    //             <li className="nav-item">
    //               <Link className="nav-link active" to="/blogs">
    //                 Blogs
    //               </Link>
    //             </li>
    //             <li className="nav-item">
    //               <Link className="nav-link active" to="/kategori">
    //                 Kategori
    //               </Link>
    //             </li>
    //             <li className="nav-item">
    //               <Link className="nav-link active" to="/playlist">
    //                 Playlist
    //               </Link>
    //             </li>
    //             <div
    //               className="close d-lg-none d-inline-block mt-4"
    //               onClick={closeMobileNav}
    //             >
    //               <img src={closeX} />
    //             </div>
    //           </ul>
    //         </div>
    //         <form className="d-flex" role="search">
    //           <div className="input-group">
    //             <span
    //               className="input-group-text icon-search-mobile"
    //               id="basic-addon1"
    //               onClick={realNav}
    //             >
    //               <img src={search} />
    //             </span>
    //             <input
    //               type="text"
    //               className="form-control up-mobile"
    //               placeholder="Cari Postingan"
    //               aria-label="Username"
    //               aria-describedby="basic-addon1"
    //               onClick={realNav}
    //             />
    //           </div>
    //         </form>
    //       </div>
    //       <div
    //         className="container position-relative d-none"
    //         id="seccond-navbar"
    //         style={{ right: -100, opacity: 0, padding: [3, 12] }}
    //       >
    //         <form
    //           className="d-flex m-auto w-100 form-search-secc"
    //           role="search"
    //         >
    //           <div className="input-group">
    //             <span className="input-group-text" id="basic-addon1">
    //               <img src={search} />
    //             </span>
    //             <input
    //               type="text"
    //               className="form-control"
    //               placeholder="Cari Postingan"
    //               aria-describedby="basic-addon1"
    //               autofocus
    //             />
    //             <span class="input-group-text" onClick={seccondNav}>
    //               <img src={closeSearch} />
    //             </span>
    //           </div>
    //         </form>
    //       </div>
    //     </nav>

    //     <Routes>
    //       <Route exact path="/" element={<Home />}></Route>
    //       <Route exact path="/blogs" element={<Blogs />}></Route>
    //     </Routes>
    //   </Router>
    // </>
  );
}

export default App;
