import React, { useState } from 'react';
import { ChevronDown, ChevronUp } from 'lucide-react';

export default function FAQ() {
  const [openIndex, setOpenIndex] = useState<number | null>(null);

  const faqs = [
    {
      question: "Will I get the recording?",
      answer: "Yes, for registered participants only. You'll receive the recording link within 24 hours after the session."
    },
    {
      question: "Is this live?",
      answer: "Yes, it's a LIVE interactive session. You can ask questions and get real-time answers from the host."
    },
    {
      question: "Is it really free?",
      answer: "Yes! ₹499 worth content—completely free for limited entries. No hidden costs or surprise charges."
    },
    {
      question: "Do I need special software?",
      answer: "Just Zoom on your phone or laptop. We'll send you the link after registration."
    },
    {
      question: "What if I can't attend live?",
      answer: "No worries! All registered participants will get access to the recording, so you won't miss out."
    },
    {
      question: "How long is the masterclass?",
      answer: "The session is 90 minutes long with actionable content, plus time for Q&A at the end."
    }
  ];

  const toggleFAQ = (index: number) => {
    setOpenIndex(openIndex === index ? null : index);
  };

  return (
    <section className="py-20 bg-gray-50">
      <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 className="text-4xl font-bold text-gray-900 text-center mb-12">❓ Frequently Asked Questions</h2>
        
        <div className="space-y-4">
          {faqs.map((faq, index) => (
            <div key={index} className="bg-white rounded-2xl shadow-lg overflow-hidden">
              <button
                onClick={() => toggleFAQ(index)}
                className="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-300"
              >
                <h3 className="text-lg font-semibold text-gray-900">{faq.question}</h3>
                {openIndex === index ? (
                  <ChevronUp className="w-6 h-6 text-blue-600 flex-shrink-0" />
                ) : (
                  <ChevronDown className="w-6 h-6 text-gray-400 flex-shrink-0" />
                )}
              </button>
              {openIndex === index && (
                <div className="px-8 pb-6">
                  <p className="text-gray-700 leading-relaxed">{faq.answer}</p>
                </div>
              )}
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}