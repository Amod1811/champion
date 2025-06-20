import React from 'react';
import Header from './components/Header';
import Hero from './components/Hero';
import Benefits from './components/Benefits';
import Curriculum from './components/Curriculum';
import EventDetails from './components/EventDetails';
import RegistrationForm from './components/RegistrationForm';
import FAQ from './components/FAQ';
import Footer from './components/Footer';

function App() {
  return (
    <div className="min-h-screen">
      <Header />
      <Hero />
      <Benefits />
      <Curriculum />
      <EventDetails />
      <RegistrationForm />
      <FAQ />
      <Footer />
    </div>
  );
}

export default App;