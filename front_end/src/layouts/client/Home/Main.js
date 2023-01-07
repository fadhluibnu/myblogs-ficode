import React from "react";
import Header from "./Header";
import PopularPlaylist from "./PopularPlaylist";
import PostTerbaru from "./PostTerbaru";

export default function Home() {
  return (
    <>
      <Header />

      <main className="mt-5">
        <PostTerbaru />
        <PopularPlaylist />
      </main>
    </>
  );
}
