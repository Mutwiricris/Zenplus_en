import React from 'react'
import firm from '../assets/images/firm.jpg'
export default function Homepage() {
  return (
    <div className=" flex ml-36 items-center justify-center min-h-screen dark:bg-dark dark:text-gray-200 " id="home">
    <div className="  w-5/6  flex -ml-7 flex-col md:flex-row items-center justify-center">
        <div className="md:w-3/4 md:pr-8 text-left mb-8 md:mb-0 dark:text-gray-200 leading-10">
          <p className="text-main text-3xl font-semibold dark:text-gray-200 mb-5">Advance seamlessly</p>
          <h1 className="text-7xl font-bold text-gray-900 mb-4 dark:text-gray-200">Next-generation Business Management</h1>
          <p className="text-gray-600 text-xl mb-9 max-w-lg dark:text-gray-200">Don't compromise on your workforce needs. We'll make sure that each worker arrives on time, every time.</p>
          
          <div className="flex  dark:text-gray flex-col sm:flex-row mb-8 max-w-md">
            <input type="email" placeholder="Enter email address" className="flex-grow px-4 py-2  sm:rounded-l-lg sm:rounded-t-none border border-gray-300 focus:outline-none focus:ring-2 focus:ring-main mb-2 sm:mb-0"/>
            <button className="bg-main text-main px-4 py-2  flex-grow border border-gray-300  ml-7 rounded-none transition duration-300">Get Started Now</button>
          </div>
          
          <div className="flex text-lg flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4  text-gray-500">
            <p className="flex items-center">
              <svg className="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fillRule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clipRule="evenodd"></path></svg>
              24/7 Support
            </p>
            <p className="flex items-center">
              <svg className="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fillRule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clipRule="evenodd"></path></svg>
              98% Fill Rate
            </p>
            <p className="flex items-center">
              <svg className="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fillRule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clipRule="evenodd"></path></svg>
              &lt;1 Day to Fill
            </p>
          </div>
        </div>
        
        <div className="md:w-1/2 flex justify-center">
          <img src={firm} alt="Industrial worker operating forklift" className="rounded-lg w-full max-w-md md:max-w-lg shadow-lg"/>
        </div>
      </div>
    </div>
    
  )
}
