import React from "react";
import "bootstrap-icons/font/bootstrap-icons.css";

export default function Kategori() {
  const filterBtn = () => {
    const show = document.getElementById("filters-value");
    show.classList.add("aktif");
    show.classList.remove("d-none");
  };
  const closeBtn = () => {
    const show = document.getElementById("filters-value");
    show.classList.add("d-none");
    show.classList.remove("aktif");
  };
  return (
    <div className="container-fluid sticky-top">
      <form action="/blog">
        <div className="row justify-content-center mt-4">
          <div className="col-12 col-md-8">
            <div
              className="input-group form-search rounded overflow-hidden shadow"
              style={{ top: 10 }}
            >
              {/* <button
                type="button"
                id="filter-button"
                className="input-group-text filter-text bg-white p-3 pe-0 py-sm-4 ps-sm-4"
                onClick={filterBtn}
              >
                <i className="bi bi-filter"></i>
                Filter
                <span className="ms-3 line-filter">|</span>
              </button> */}
              <input type="text" name="search" className="form-control" />
              <button type="submit" className="btn btn-idk p-3 px-5 rounded-0">
                <i className="bi bi-search"></i>
              </button>
            </div>
            <div class="row mt-3 d-none" id="filters-value">
              <div class="col-12 col-md-8 col-lg-6">
                <div class="bg-white p-3 rounded shadow">
                  <div class="close" id="close" onClick={closeBtn}>
                    <i class="bi bi-x-lg"></i>
                  </div>
                  <div class="d-flex">
                    <div class="kategori">
                      <h4 class="kategori-text">Kategori</h4>
                      <select
                        class="select form-select"
                        aria-label="Default select example border-none"
                        name="kategori"
                      >
                        <option selected value="">
                          Semua
                        </option>
                        <option>p</option>
                      </select>
                    </div>
                    <div class="urutkan ms-4">
                      <h4 class="urutkan-text">Urutkan</h4>
                      <select
                        class="select form-select"
                        aria-label="Default select example border-none"
                        name="urutan"
                      >
                        <option selected value="desc">
                          Terbaru
                        </option>
                        <option>Terlama</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  );
}
