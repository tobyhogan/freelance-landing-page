import React, { useState, useEffect, useRef } from "react";
import { Link } from "gatsby";

import { MdMenu, MdOutlineDarkMode, MdLightMode, MdLight, MdDarkMode } from "react-icons/md";

import '../styles/global.css'
import '../styles/index.css'



function Header() {

  const [navOpen, setNavOpen] = useState(false)

  const [isDark, setIsDark] = useState(false)

  const wrapperRef = useRef(null);
  useOutsideAlerter(wrapperRef);


  const navList = 
    <>

 
      <Link to="/page1" className="Link2 hover:underline">Page 1</Link>
      <Link to="/page2" className="Link2 hover:underline">Page 2</Link>


    </>



  useEffect(() => {


    if (!localStorage.getItem("theme")) {

      
      if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {

        localStorage.setItem("theme", "dark")
        document.body.classList.add('dark')
  
        setIsDark(true)
          

      } else {

        localStorage.setItem("theme", "dark")
        document.body.classList.add('dark')
  
        setIsDark(true)

      }


    } else if (localStorage.getItem("theme") == "light") {

      
      
      document.body.classList.add('light');

      setIsDark(false)



    } else if (localStorage.getItem("theme") == "dark") {

      
      
      document.body.classList.add('dark');

      setIsDark(true)

    }


  }, [])


  function handleToggleTheme() {


    if (localStorage.getItem("theme") == "light") {


      localStorage.setItem("theme", "dark")

      
      document.body.classList.add('dark');
      document.body.classList.remove('light');

      setIsDark(true)
      

    } else if (localStorage.getItem("theme") == "dark") {

      localStorage.setItem("theme", "light")

      document.body.classList.add('light');
      document.body.classList.remove('dark');

      setIsDark(false)

    } 


  }

  function useOutsideAlerter(ref: any) {

    useEffect(() => {

      function handleClickOutside(event: any) {

        if (ref.current && !ref.current.contains(event.target)) {
          
          setNavOpen(false)

        }}
  
      document.addEventListener("mousedown", handleClickOutside);
      return () => {
        document.removeEventListener("mousedown", handleClickOutside);
      };

      
    }, [ref]);
  }
  






  return (
    

    <header className="NavBar flex justify-between">
      <Link to='/' className='Link1 ml-14 pt-3 pb-4'>Toby Hogan</Link>


      <div className="flex flex-row">

        { /*

        <div className="border-4 border-red-600 w-fit h-fit rounded-lg mr-16 px-2 py-1 mt-2">
          <p>Selected Theme:</p>
          <select className="" id="theme-select">
            <option value="volvo">Minimal</option>
            <option value="saab">Gradient1</option>

          </select>
        </div>

        */ }



        <div className="FullNav">

          <ul className="flex mt-7 mr-3">
            {navList}
          </ul>

        </div>
        
        <div className="ToggleNav">

          <button onClick={() => {setNavOpen(navOpen => !navOpen)}}>
            <MdMenu className="ml-4 mr-8 mt-4 text-black dark:text-white" size={30} />
          </button>

          {navOpen ?

            <div ref={wrapperRef} className="border-1 border-slate-300 border-2 pt-4 ml-[-53px] pb-7 pl-2 pr-8  absolute rounded-md bg-white dark:bg-slate-700">
              <ul className="flex flex-col text-start ml-3">
                {navList}
              </ul>
            </div>

          : null }

        </div>


        <div className="ThemeToggler">

          { isDark ? (<button onClick={handleToggleTheme}><MdOutlineDarkMode size={28} className="text-black dark:text-white"/></button>)
            : (<button onClick={handleToggleTheme}><MdLightMode size={28} className="text-black dark:text-white"/></button>) }

        </div>


      </div>


        
    </header>

  )

}

export default Header
