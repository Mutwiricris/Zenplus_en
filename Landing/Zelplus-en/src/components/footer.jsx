import React from "react";
import { Link } from "react-router-dom";
import logoLight from '../assets/images/logo-light.png';
import { FiShoppingCart, FiDribbble, FiLinkedin, FiFacebook, FiInstagram, FiTwitter, FiMail, FiFile } from 'react-icons/fi';

export default function Footer() {
    return (
        <footer className="bg-gray-900 text-gray-300">    
            <div className="container mx-auto px-4">
                <div className="py-16">
                    <div className="grid md:grid-cols-12 gap-8">
                        <div className="md:col-span-4">
                            <Link to="/" className="inline-block">
                                <img src={logoLight} alt="Logo" className="h-8" />
                            </Link>
                            <p className="mt-4">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                            <div className="flex mt-6 space-x-4">
                                {[FiShoppingCart, FiDribbble, FiLinkedin, FiFacebook, FiInstagram, FiTwitter, FiMail, FiFile].map((Icon, index) => (
                                    <a key={index} href="#" className="text-gray-400 hover:text-indigo-500 transition-colors duration-300">
                                        <Icon className="w-5 h-5" />
                                    </a>
                                ))}
                            </div>
                        </div>
                        
                        <div className="md:col-span-2">
                            <h5 className="text-lg font-semibold mb-4">Company</h5>
                            <ul className="space-y-2">
                                {['About us', 'Services', 'Team', 'Pricing', 'Project', 'Blog', 'Login'].map((item) => (
                                    <li key={item}>
                                        <Link to={`/${item.toLowerCase().replace(' ', '-')}`} className="hover:text-indigo-500 transition-colors duration-300">
                                            {item}
                                        </Link>
                                    </li>
                                ))}
                            </ul>
                        </div>
                        
                        <div className="md:col-span-3">
                            <h5 className="text-lg font-semibold mb-4">Useful Links</h5>
                            <ul className="space-y-2">
                                {['Terms of Services', 'Privacy Policy', 'Documentation', 'Changelog', 'Widget'].map((item) => (
                                    <li key={item}>
                                        <Link to={`/${item.toLowerCase().replace(' ', '-')}`} className="hover:text-indigo-500 transition-colors duration-300">
                                            {item}
                                        </Link>
                                    </li>
                                ))}
                            </ul>
                        </div>

                        <div className="md:col-span-3">
                            <h5 className="text-lg font-semibold mb-4">Newsletter</h5>
                            <p className="mb-4">Sign up and receive the latest tips via email.</p>
                            <form onSubmit={(e) => e.preventDefault()} className="space-y-4">
                                <div>
                                    <label htmlFor="email" className="sr-only">Email</label>
                                    <input
                                        type="email"
                                        id="email"
                                        placeholder="Your email"
                                        className="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                        required
                                    />
                                </div>
                                <button
                                    type="submit"
                                    className="w-full px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-md transition-colors duration-300"
                                >
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div className="border-t border-gray-800 py-8">
                <div className="container mx-auto px-4">
                    <div className="flex flex-col md:flex-row justify-between items-center">
                        <p className="text-sm">&copy; {new Date().getFullYear()} Techwind. All rights reserved.</p>
                        <div className="flex space-x-4 mt-4 md:mt-0">
                            {['american-ex', 'discover', 'master-card', 'paypal', 'visa'].map((payment) => (
                                <img key={payment} src={`/assets/images/payments/${payment}.png`} alt={payment} className="h-6" />
                            ))}
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    );
}