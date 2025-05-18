import 'https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@3.1.0/dist/cookieconsent.umd.js';

// Enable dark mode
document.documentElement.classList.add('cc--darkmode');

CookieConsent.run({
    guiOptions: {
        consentModal: {
            layout: "box wide",
            position: "bottom left",
            equalWeightButtons: true,
            flipButtons: false
        },
        preferencesModal: {
            layout: "box",
            position: "right",
            equalWeightButtons: true,
            flipButtons: false
        }
    },
    categories: {
        necessary: {
            readOnly: true
        },
        analytics: {}
    },
    language: {
        default: "en",
        translations: {
            en: {
                consentModal: {
                    title: "Hello traveller, it's cookie time !",
                    description: "Hello traveller, it's cookie time! We use cookies to enhance your experience on our site. These small files are placed in your browser to help us remember your preferences and improve functionality. While cookies don't contain personal information, they allow us to connect your actions with the data you've provided voluntarily. You can choose to disable cookies through your browser settings, but please note that some features of our site may not work properly without them. Thank you for your understanding.",
                    acceptAllBtn: "Accept All",
                    acceptNecessaryBtn: "Reject All",
                    showPreferencesBtn: "Manage Preferences",
                    footer: "<a href=\"/terms\">Privacy Policy</a>\n<a href=\"/policy\">Terms And Conditions</a>"
                },
                preferencesModal: {
                    title: "Consent Preferences Center",
                    acceptAllBtn: "Accept All",
                    acceptNecessaryBtn: "Reject All",
                    savePreferencesBtn: "Save Preferences",
                    closeIconLabel: "Close Modal",
                    serviceCounterLabel: "Service|Services",
                    sections: [
                        {
                            title: "Cookie Usage",
                            description: "We use cookies to improve your experience on our site. These small files help us remember your preferences and keep our site functioning smoothly. By using the site, you agree to our use of cookies."
                        },
                        {
                            title: "Strictly Necessary Cookies <span class=\"pm__badge\">Always Enabled</span>",
                            description: "These cookies are essential for the basic functioning of our website. They ensure that you can navigate the site and use its features, such as access to secure areas, without them, the site wouldn't function properly.",
                            linkedCategory: "necessary"
                        },
                        {
                            title: "Analytics Cookies",
                            description: "These cookies help us gather insights into how users interact with our site. They allow us to monitor site performance and improve user experience by analyzing traffic patterns.",
                            linkedCategory: "analytics"
                        },
                        {
                            title: "More Information",
                            description: "For any questions about our cookie policy and how you can manage your preferences, please <a class=\"cc__link\" href=\"#yourdomain.com\">contact us</a>."
                        }                        
                    ]
                }
            }
        }
    }
});