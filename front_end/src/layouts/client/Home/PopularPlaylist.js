import React from "react";
import image from "../../../assets/image.png";

export default function PopularPlaylist() {
  return (
    <section
      className="section-postingan mt-4"
      style={{ backgroundColor: "rgba(44, 87, 244, 0.08)" }}
    >
      <article className="container pt-4">
        <h1>Playlist Terpopuler</h1>
        <div className="row mt-3 gy-4">
          <div className="col-sm-6 col-lg-4">
            <div
              className="card border-0 text-decoration-none rounded-4"
              style={{ overflow: "hidden" }}
              href="#"
            >
              <img src={image} className="card-img-top" alt="..." />
              <div className="card-body bg-transparent">
                <div className="info d-flex mb-3">
                  <span className="me-3">
                    <i className="bi bi-journal-richtext"></i> 18 Modul
                  </span>
                  <span>
                    <i className="bi bi-eye me-1"></i> 900 Views
                  </span>
                </div>
                <h5 className="card-title">
                  Lorem non dapibus. Phasellus orci Iaculis venenatis orci
                </h5>
                <p className="card-text">
                  Pellentesque sem elit, hendrerit ut sit ameteuismod laoreet ac
                  justo. Curabitur et diam neque. Hendrerit...
                </p>
                <a href="#" class="btn btn-primary d-block">
                  Ikuti Playlist
                </a>
              </div>
            </div>
          </div>
        </div>
      </article>
    </section>
  );
}
