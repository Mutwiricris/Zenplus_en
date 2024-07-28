import React from "react";
import { Link } from "react-router-dom";

import heroImg from "../assets/images/design-team.svg"

import Navbar from "../components/navbar";
import About from "../components/about";
import Services from "../components/services";
import AgencyTab from "../components/agencyTab";
import Cta from "../components/cta";
import Client from "../components/client";
import Pricing from "../components/pricing";
import Blogs from "../components/blog";
import GetInTouch from "../components/getInTuoch";
import Footer from "../components/footer";
import Switcher from "../components/switcher";
import Homepage from "../layout/Homepage";
import Line from "../layout/Line";
import Explore from "../layout/exploreApps";
import Apps from "../components/Apps";

export default function Index(){
    return(
        <>
        <Navbar/>
       <Homepage/>
       <Line/>
       
       <Explore/>
       <Apps/>
       {/* <About/>
        <About/>
        <Services/>
        <AgencyTab/>
        <Cta/>
        <Client/>
        <Pricing/> */}
        <Blogs/>
        <GetInTouch/>
        <Footer/>
        <Switcher/>
        </>
    )
}