<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
<div class="menu-container">
    <div class="balk"></div>

    <div class="groepsnaam"><h1>L.S.M.</h1></div>
    <div class="functie"><h1>Developers</h1></div>

    <a href="mainpage.php" class="homepage-btn">Homepage</a>
    <a href="projects.php" class="projects-btn">Projects</a>
    <a href="team.php" class="team-btn">Our team</a>
    <a href="contact.php" class="contact-btn">Contact us</a>
</div>



<style>


        .container-contact {
            padding: 24px;
            display: flex;
            justify-content: center;
            align-items: start;
            
        }

        .contact-box {
            width: 1000px;
            background: #242b3e;
            border-radius: 40px;
            padding: 32px;
            box-sizing: border-box;
            position: absolute;
            top: 100px;
            left: 400px;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .columns {
            display: flex;
            gap: 18px;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .column {
            width: 250px;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .social-btn {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #2f3a56;
            color: white;
            padding: 11px;
            border-radius: 12px;
            text-decoration: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
        }

        .linkedin {
            background: #0a66c2;
        }

        .mail-btn {
            display: flex;
            justify-content: center;
            margin-top: 22px;
        }

        .mail-btn a {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #1f2937;
            padding: 12px 18px;
            border-radius: 12px;
            text-decoration: none;
            color: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.25);
        }

        svg {
            min-width: 28px;
            min-height: 28px;
            max-width: 50px;
            max-height: 50px;
        }
    </style>
</head>
<body>
<style></style>
<div class="container-contact">
    <div class="contact-box">
        <h2 style="font-size: 22px; margin-bottom: 18px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Contact</h2>

        <div class="columns">
            <!-- User 1 -->
            <div class="column">
                <h3>Luca Piano</h3>
                <a href="https://github.com/user1" target="_blank" class="social-btn">
                    <svg viewBox="0 0 24 24" fill="#fff"><path d="M12 .5C5.73.5.75 5.48.75 11.75c0 4.95 3.22 9.14 7.69 10.62.56.1.77-.24.77-.54 0-.27-.01-1-.02-1.96-3.13.68-3.79-1.51-3.79-1.51-.51-1.3-1.25-1.65-1.25-1.65-1.02-.7.08-.69.08-.69 1.12.08 1.71 1.16 1.71 1.16 1 .17 1.57-.39 1.94-.75-2.5-.29-5.13-1.26-5.13-5.6 0-1.24.44-2.25 1.17-3.04-.12-.29-.51-1.46.11-3.05 0 0 .96-.31 3.15 1.16.92-.26 1.9-.39 2.88-.39.98 0 1.96.13 2.88.39 2.18-1.47 3.14-1.16 3.14-1.16.62 1.59.23 2.76.11 3.05.73.79 1.17 1.8 1.17 3.04 0 4.35-2.64 5.3-5.15 5.58.43.37.82 1.1.82 2.22 0 1.6-.01 2.88-.01 3.27 0 .3.21.65.78.54C19.03 20.89 22.25 16.69 22.25 11.75 22.25 5.48 17.27.5 12 .5z"/></svg>
                    <div>
                        <strong>Luca Piano</strong><br>
                        <span style="color:#cbd5e1; font-size:12px;"></span>
                    </div>
                </a>

                <a href="https://linkedin.com/in/userA" target="_blank" class="social-btn linkedin">
                    <svg viewBox="0 0 24 24" fill="#fff"><path d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.1 1 2.5 1 4.98 2.12 4.98 3.5zM.2 8h4.6V24H.2V8zM8.7 8h4.4v2.18h.06c.61-1.16 2.1-2.38 4.33-2.38 4.63 0 5.48 3.05 5.48 7.02V24h-4.6v-7.2c0-1.72-.03-3.94-2.4-3.94-2.4 0-2.77 1.87-2.77 3.8V24H8.7V8z"/></svg>
                    <div>
                        <strong>Luca Piano</strong><br>
                        <span style="color:#dbeafe; font-size:12px; "></span>
                    </div>
                </a>
            </div>

            <!-- User 2 -->
            <div class="column">
                <h3>Sem janssen</h3>
                <a href="https://github.com/user2" target="_blank" class="social-btn">
                    <svg viewBox="0 0 24 24" fill="#fff"><path d="M12 .5C5.73.5.75 5.48.75 11.75c0 4.95 3.22 9.14 7.69 10.62.56.1.77-.24.77-.54 0-.27-.01-1-.02-1.96-3.13.68-3.79-1.51-3.79-1.51-.51-1.3-1.25-1.65-1.25-1.65-1.02-.7.08-.69.08-.69 1.12.08 1.71 1.16 1.71 1.16 1 .17 1.57-.39 1.94-.75-2.5-.29-5.13-1.26-5.13-5.6 0-1.24.44-2.25 1.17-3.04-.12-.29-.51-1.46.11-3.05 0 0 .96-.31 3.15 1.16.92-.26 1.9-.39 2.88-.39.98 0 1.96.13 2.88.39 2.18-1.47 3.14-1.16 3.14-1.16.62 1.59.23 2.76.11 3.05.73.79 1.17 1.8 1.17 3.04 0 4.35-2.64 5.3-5.15 5.58.43.37.82 1.1.82 2.22 0 1.6-.01 2.88-.01 3.27 0 .3.21.65.78.54C19.03 20.89 22.25 16.69 22.25 11.75 22.25 5.48 17.27.5 12 .5z"/></svg>
                    <div>
                        <strong>Sem janssen</strong><br>
                        <span style="color:#cbd5e1; font-size:12px;"></span>
                    </div>
                </a>

                <a href="https://linkedin.com/in/userB" target="_blank" class="social-btn linkedin">
                    <svg viewBox="0 0 24 24" fill="#fff"><path d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.1 1 2.5 1 4.98 2.12 4.98 3.5zM.2 8h4.6V24H.2V8zM8.7 8h4.4v2.18h.06c.61-1.16 2.1-2.38 4.33-2.38 4.63 0 5.48 3.05 5.48 7.02V24h-4.6v-7.2c0-1.72-.03-3.94-2.4-3.94-2.4 0-2.77 1.87-2.77 3.8V24H8.7V8z"/></svg>
                    <div>
                        <strong>Sem Janssen</strong><br>
                        <span style="color:#dbeafe; font-size:12px;"></span>
                    </div>
                </a>
            </div>

            <!-- User 3 -->
            <div class="column">
                <h3>Milo van Eysden</h3>
                <a href="https://github.com/ookblij" target="_blank" class="social-btn">
                    <svg viewBox="0 0 24 24" fill="#fff"><path d="M12 .5C5.73.5.75 5.48.75 11.75c0 4.95 3.22 9.14 7.69 10.62.56.1.77-.24.77-.54 0-.27-.01-1-.02-1.96-3.13.68-3.79-1.51-3.79-1.51-.51-1.3-1.25-1.65-1.25-1.65-1.02-.7.08-.69.08-.69 1.12.08 1.71 1.16 1.71 1.16 1 .17 1.57-.39 1.94-.75-2.5-.29-5.13-1.26-5.13-5.6 0-1.24.44-2.25 1.17-3.04-.12-.29-.51-1.46.11-3.05 0 0 .96-.31 3.15 1.16.92-.26 1.9-.39 2.88-.39.98 0 1.96.13 2.88.39 2.18-1.47 3.14-1.16 3.14-1.16.62 1.59.23 2.76.11 3.05.73.79 1.17 1.8 1.17 3.04 0 4.35-2.64 5.3-5.15 5.58.43.37.82 1.1.82 2.22 0 1.6-.01 2.88-.01 3.27 0 .3.21.65.78.54C19.03 20.89 22.25 16.69 22.25 11.75 22.25 5.48 17.27.5 12 .5z"/></svg>
                    <div>
                        <strong>Milo van Eysden</strong><br>
                        <span style="color:#cbd5e1; font-size:12px;"></span>
                    </div>
                </a>

                <a href="https://www.linkedin.com/in/milo-eysden-a8763332b/" target="_blank" class="social-btn linkedin">
                    <svg viewBox="0 0 24 24" fill="#fff"><path d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.1 1 2.5 1 4.98 2.12 4.98 3.5zM.2 8h4.6V24H.2V8zM8.7 8h4.4v2.18h.06c.61-1.16 2.1-2.38 4.33-2.38 4.63 0 5.48 3.05 5.48 7.02V24h-4.6v-7.2c0-1.72-.03-3.94-2.4-3.94-2.4 0-2.77 1.87-2.77 3.8V24H8.7V8z"/></svg>
                    <div>
                        <strong>Milo van Eysden</strong><br>
                        <span style="color:#dbeafe; font-size:12px;"></span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Email -->
        <div class="mail-btn">
            <a href="mailto:LMSdevelopers@outlook.com">
                <svg viewBox="0 0 24 24" fill="#fff"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"  /></svg>
                <div>
                    <strong>Email</strong><br>
                    <span style="font-size:12px; color:#cbd5e1;">LMSdevelopers@outlook.com</span>
                </div>
            </a>
        </div>

    </div>
</div>

</body>
</html>
<script>
(function(){
    var el = document.querySelector('.contact-box');
    if (!el) return;

    // beginpositie: iets naar rechts en onzichtbaar
    el.style.transform = 'translateX(200px)';
    el.style.opacity = '0';
    el.style.transition = 'transform 500ms cubic-bezier(0.2,0.8,0.2,1), opacity 400ms ease';

    function reveal(){
        requestAnimationFrame(function(){
            el.style.transform = 'translateX(0)';
            el.style.opacity = '1';
        });
    }

    if (document.readyState === 'complete' || document.readyState === 'interactive') {
        reveal();
    } else {
        window.addEventListener('DOMContentLoaded', reveal);
    }

    
    var css = `
        .social-btn, .mail-btn a, .homepage-btn, .projects-btn, .team-btn, .contact-btn {
            transition: transform 180ms cubic-bezier(0.2,0.8,0.2,1), box-shadow 180ms ease;
            will-change: transform;
        }
        .social-btn:hover, .mail-btn a:hover, .homepage-btn:hover, .projects-btn:hover, .team-btn:hover, .contact-btn:hover {
            transform: translateY(-6px);
        }
        /* Slightly stronger lift on focus for keyboard users */
        .social-btn:focus, .mail-btn a:focus, .homepage-btn:focus, .projects-btn:focus, .team-btn:focus, .contact-btn:focus {
            transform: translateY(-6px);
            outline: none;
        }
        /* Disable hover lift for coarse pointers (touch) to avoid jumpiness */
        @media (pointer: coarse) {
            .social-btn, .mail-btn a, .homepage-btn, .projects-btn, .team-btn, .contact-btn {
                transition: none;
            }
            .social-btn:hover, .mail-btn a:hover, .homepage-btn:hover, .projects-btn:hover, .team-btn:hover, .contact-btn:hover {
                transform: none;
            }
        }
    `;
    var st = document.createElement('style');
    st.type = 'text/css';
    st.appendChild(document.createTextNode(css));
    (document.head || document.documentElement).appendChild(st);

})();
</script>
