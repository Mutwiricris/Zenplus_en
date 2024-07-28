import React,{useState,useEffect} from "react";
import { Link } from "react-router-dom";
import logoDark from '../assets/images/logo-white2.png'
import logoLight from '../assets/images/logo-white2.png'
import { Link as Link1 } from "react-scroll";

export default function Navbar(){

    let [scroll, setScroll] = useState(false);
    let [manu, setManu] = useState(false)

    useEffect(() => {
        window.addEventListener("scroll", () => {
            setScroll(window.scrollY > 50);
        });
        return()=>{
            window.removeEventListener("scroll", () => {
                setScroll(window.scrollY > 50);
            });
        }
    }, []);
   
    return(
      <nav className={ `flex p-8 items-center justify-center navbar ${scroll ? 'is-sticky' : ''}`} id="navbar">
          <div className="w-5/6  relative flex items-center justify-between">
                <Link className="navbar-brand md:me-8" to="/">
                    <img src={logoDark} className="inline-block w-1/2 dark:hidden" alt=""/>
                    <img src={logoLight} className="hidden w-1/2 dark:inline-block" alt=""/>
                </Link>

                <div className="nav-icons flex items-center lg_992:order-2 ms-auto md:ms-8">
                    <ul className="list-none menu-social mb-0">
                        <li className="inline">
                        <Link to="" className="h-8 px-4 text-[16px] tracking-wider inline-flex items-center justify-center font-medium rounded-md mx-7 dark:text-gray-200 text-main uppercase">Login</Link>
                        <Link to="" className="h-8 px-4 text-[16px] tracking-wider inline-flex items-center justify-center font-medium rounded-md bsa dark:text-gray-200 text-white uppercase">Signup</Link>
                            
                        </li>
                    </ul>
                    <button data-collapse="menu-collapse" type="button" className="collapse-btn inline-flex items-center ms-2 text-dark dark:text-white lg_992:hidden" onClick={() =>setManu(!manu)}>
                        <span className="sr-only">Navigation Menu</span>
                        <i className="mdi mdi-menu text-[24px]"></i>
                    </button>
                </div>

                <div className={`navigation text-[17px] lg_992:order-1 lg_992:flex  ms-auto ${manu ? '' : 'hidden'}`} id="menu-collapse">
                    <ul className="navbar-nav text-[17px]" id="navbar-navlist">
                        <li className="nav-item ms-0">
                            <Link1 className="nav-link" to="home" smooth={true} duration={1000} activeClass='active' spy={true}>Home</Link1>
                        </li>
                        <li className="nav-item ms-0">
                            <Link1 className="nav-link" to="about" smooth={true} duration={1000} activeClass='active' spy={true}>About</Link1>
                        </li>
                        <li className="nav-item ms-0">
                            <Link1 className="nav-link" to="services" smooth={true} duration={1000} activeClass='active' spy={true}>Services</Link1>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
      
    )
}