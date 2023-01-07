import React from "react";
import image from "../../../assets/image.png";
export default function Posts() {
  return (
    <main className="mt-5">
      <section className="section-postingan">
        <article className="container">
          <div className="row mt-3 gy-4">
            <div className="col-sm-6 col-lg-4">
              <a className="card border-0 text-decoration-none" href="#">
                <img src={image} className="card-img-top rounded-4" alt="..." />
                <div className="card-body px-2">
                  <div className="info d-flex justify-content-between mb-2">
                    <span className="d-flex align-items-center">
                      <i class="bi bi-calendar-week me-1"></i>{" "}
                      <span>22/01/2022</span>
                    </span>
                    <span className="d-flex align-items-center">
                      <i class="bi bi-bookmark-heart me-1"></i>{" "}
                      <span>Programming</span>
                    </span>
                    <span className="d-flex align-items-center">
                      <i class="bi bi-eye me-1"></i> <span>900 Views</span>
                    </span>
                  </div>
                  <h5 className="card-title">
                    Lorem non dapibus. Phasellus orci Iaculis venenatis orci
                  </h5>
                  <p className="card-text">
                    Pellentesque sem elit, hendrerit ut sit ameteuismod laoreet
                    ac justo. Curabitur et diam neque. Hendrerit...
                  </p>
                </div>
              </a>
            </div>
          </div>
        </article>
      </section>
    </main>
  );
}
