import React, { useState } from 'react';
import { ArrowRight, CheckCircle, X } from 'lucide-react';

export default function RegistrationForm() {
  const [formData, setFormData] = useState({
    fullName: '',
    email: '',
    whatsapp: '',
    reason: 'Student'
  });
  const [showModal, setShowModal] = useState(false);

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    setShowModal(true);
  };

  const handleInputChange = (e: React.ChangeEvent<HTMLInputElement | HTMLSelectElement>) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value
    });
  };

  return (
    <section id="register" className="py-20 bg-gradient-to-br from-orange-500 to-red-600">
      <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h2 className="text-4xl md:text-5xl font-bold text-white mb-6">
            💥 This Masterclass is for You if…
          </h2>
          
          <div className="grid md:grid-cols-2 gap-6 mb-8">
            <div className="bg-white bg-opacity-20 backdrop-blur-sm rounded-2xl p-6 text-white">
              <h3 className="font-bold text-lg mb-4">You're Struggling With:</h3>
              <ul className="text-left space-y-2">
                <li>🚫 You know what to do, but still don't do it</li>
                <li>🚫 You start with excitement but quickly give up</li>
                <li>🚫 You feel stuck, unmotivated, or distracted</li>
                <li>🚫 You've tried productivity hacks that don't last</li>
              </ul>
            </div>
            <div className="bg-white bg-opacity-20 backdrop-blur-sm rounded-2xl p-6 text-white">
              <h3 className="font-bold text-lg mb-4">You Want:</h3>
              <ul className="text-left space-y-2">
                <li>✅ A real, brain-based system that just works</li>
                <li>✅ Consistent action without willpower</li>
                <li>✅ To finally trust yourself again</li>
                <li>✅ Proven strategies that create lasting change</li>
              </ul>
            </div>
          </div>

          <div className="bg-white bg-opacity-20 backdrop-blur-sm rounded-2xl p-8 mb-8">
            <h3 className="text-2xl font-bold text-white mb-4">Special Limited Time Offer</h3>
            <div className="flex items-center justify-center space-x-4 text-white text-xl">
              <span className="line-through text-orange-200">💸 Actual Value: ₹499</span>
              <span className="font-bold text-3xl">🎉 Today: 100% FREE</span>
            </div>
            <p className="text-orange-100 mt-2 text-lg font-semibold">🚨 Only a few FREE slots left!</p>
          </div>
        </div>

        {/* Registration Form */}
        <div className="bg-white rounded-3xl p-8 shadow-2xl">
          <h3 className="text-3xl font-bold text-gray-900 text-center mb-2">
            👉 REGISTER NOW FOR FREE
          </h3>
          <p className="text-gray-600 text-center mb-8">📝 Fill in to Reserve Your Spot:</p>
          
          <form onSubmit={handleSubmit} className="space-y-6">
            <div>
              <label htmlFor="fullName" className="block text-sm font-semibold text-gray-700 mb-2">
                Full Name *
              </label>
              <input
                type="text"
                id="fullName"
                name="fullName"
                required
                value={formData.fullName}
                onChange={handleInputChange}
                className="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 text-lg"
                placeholder="Enter your full name"
              />
            </div>
            
            <div>
              <label htmlFor="email" className="block text-sm font-semibold text-gray-700 mb-2">
                Email ID *
              </label>
              <input
                type="email"
                id="email"
                name="email"
                required
                value={formData.email}
                onChange={handleInputChange}
                className="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 text-lg"
                placeholder="Enter your email address"
              />
            </div>
            
            <div>
              <label htmlFor="whatsapp" className="block text-sm font-semibold text-gray-700 mb-2">
                WhatsApp Number *
              </label>
              <input
                type="tel"
                id="whatsapp"
                name="whatsapp"
                required
                value={formData.whatsapp}
                onChange={handleInputChange}
                className="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 text-lg"
                placeholder="Enter your WhatsApp number"
              />
            </div>
            
            <div>
              <label htmlFor="reason" className="block text-sm font-semibold text-gray-700 mb-2">
                Reason for Joining *
              </label>
              <select
                id="reason"
                name="reason"
                required
                value={formData.reason}
                onChange={handleInputChange}
                className="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 text-lg"
              >
                <option value="Student">Student</option>
                <option value="Graduate">Graduate</option>
                <option value="Other">Other</option>
              </select>
            </div>
            
            <button
              type="submit"
              className="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 px-8 rounded-xl text-xl font-bold hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg flex items-center justify-center space-x-2"
            >
              <span>🚀 Reserve My Free Spot Now</span>
              <ArrowRight className="w-6 h-6" />
            </button>
          </form>
          
          <p className="text-sm text-gray-600 text-center mt-6">
            📩 Confirmation & Access Link will be sent via WhatsApp & Email.
          </p>
        </div>
      </div>

      {/* Success Modal */}
      {showModal && (
        <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50">
          <div className="bg-white rounded-2xl p-8 max-w-md w-full mx-4 relative">
            <button
              onClick={() => setShowModal(false)}
              className="absolute top-4 right-4 text-gray-500 hover:text-gray-700"
            >
              <X className="w-6 h-6" />
            </button>
            <div className="text-center">
              <CheckCircle className="w-16 h-16 text-green-500 mx-auto mb-4" />
              <h3 className="text-2xl font-bold text-gray-900 mb-4">Registration Successful! 🎉</h3>
              <p className="text-gray-600 mb-6">
                Thank you for registering! You'll receive confirmation and access details on WhatsApp and email shortly.
              </p>
              <button
                onClick={() => setShowModal(false)}
                className="bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-3 rounded-xl font-semibold hover:from-green-600 hover:to-green-700 transition-all duration-300"
              >
                Awesome! 👍
              </button>
            </div>
          </div>
        </div>
      )}
    </section>
  );
}