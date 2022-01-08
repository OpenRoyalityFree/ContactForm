# Simple Contact Form with SMTPjs

<p align="center">
    <a href="https://img.shields.io/badge/code-passing-green" alt="Coding Status">
        <img src="https://img.shields.io/badge/code-passing-green" /></a>
</p>

Use this to provide a simple contact form on your own website, and send the messages with SMTP. Or use this as a basis or example to create your own contact form. 

## Getting Started

1. Download the latest version of the contact form: https://github.com/OpenRoyalityFree/ContactForm/releases
2. Extract the archive on your own computer.
3. Copy the `config.example.php` to `config.php` and edit the required settings.
4. Upload the extracted files to a subdirectory of your hosting account (e.g. `htdocs/contact/`).
5. Navigate to http://something.blogystar.com/contact/ and try out the form!

### How to get your SMTP credentials

To be able to send messages with this contact form, you'll need a working SMTP service. RoyalityFree does not provide this with free hosting, but you can use third party SMTP services.

A simple, free option to use is Gmail. You can use Gmail to send your messages like so:

1. Sign up for a free Gmail account. 
2. Enable Two Factor Authentication on the Google account: https://myaccount.google.com/signinoptions/two-step-verification
3. Generate an App Specific Password for the account: https://myaccount.google.com/apppasswords
4. In the configuration file, set the SMTP Hostname `smtp.gmail.com`, enter your full Gmail address in the SMTP Username field and enter the App Specific Password in the SMTP Password field.
