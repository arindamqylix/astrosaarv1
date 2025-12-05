<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>🪐 Launching Soon</title>
    <meta name="description" content="Launching soon — Here to light your way, every step of the journey." />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
      :root {
        --bg: #0b1020;
        --fg: #e6e9f3;
        --muted: #9aa3b2;
        --accent: #8b5cf6; /* violet */
        --accent-2: #22d3ee; /* cyan */
        --card: #0f1630cc;
        --border: #243056;
        --focus: #a78bfa55;
      }
      * { box-sizing: border-box; }
      html, body { height: 100%; }
      body {
        margin: 0; font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji";
        color: var(--fg); background: radial-gradient(1200px 800px at 10% 10%, #131a36, transparent 60%), radial-gradient(900px 700px at 90% 20%, #0b1f33, transparent 60%), linear-gradient(180deg, #070b17, #0b1020);
        overflow-x: hidden;
      }

      /* Subtle animated stars */
      .stars, .twinkles {
        position: fixed; inset: 0; pointer-events: none; z-index: 0;
        background-repeat: repeat;
      }
      .stars {
        background-image: radial-gradient(2px 2px at 20% 30%, #ffffff22 0, #ffffff00 50%),
                          radial-gradient(1.5px 1.5px at 70% 60%, #ffffff1c 0, #ffffff00 50%),
                          radial-gradient(1px 1px at 40% 80%, #ffffff18 0, #ffffff00 50%),
                          radial-gradient(1.25px 1.25px at 85% 35%, #ffffff10 0, #ffffff00 50%);
        animation: drift 60s linear infinite;
      }
      .twinkles {
        background-image: radial-gradient(2px 2px at 30% 20%, #ffffff33 0, #ffffff00 50%),
                          radial-gradient(1.25px 1.25px at 60% 75%, #ffffff2b 0, #ffffff00 50%),
                          radial-gradient(1.1px 1.1px at 80% 50%, #ffffff26 0, #ffffff00 50%);
        mix-blend-mode: screen;
        animation: twinkle 3.6s ease-in-out infinite;
      }
      @keyframes drift { from { transform: translateY(0); } to { transform: translateY(-80px); } }
      @keyframes twinkle { 0%, 100% { opacity: .4 } 50% { opacity: 1 } }

      .wrap { position: relative; z-index: 1; min-height: 100%; display: grid; place-items: center; padding: 24px; }
      .card {
        width: min(720px, 95vw); border: 1px solid var(--border); border-radius: 28px; padding: clamp(24px, 3.2vw, 36px);
        background: linear-gradient(180deg, #0f1630aa, #0b1230a6); backdrop-filter: blur(10px);
        box-shadow: 0 10px 30px #00000055, inset 0 1px 0 #ffffff10;
      }

      .logo {
        display: inline-flex; align-items: center; gap: 10px; text-decoration: none; color: inherit;
      }
      .planet {
        width: 44px; height: 44px; border-radius: 50%; background: radial-gradient(circle at 30% 30%, #9e8cfb, #6b21a8 60%, #24104a);
        box-shadow: 0 0 40px 8px #8b5cf644, 0 0 0 2px #a78bfa22 inset;
        position: relative; overflow: visible;
      }
      .planet::after {
        content: ""; position: absolute; inset: -8px; border-radius: 50%;
        border: 2px solid #22d3ee55; transform: rotate(-15deg);
        clip-path: ellipse(65% 35% at 50% 50%);
        filter: drop-shadow(0 0 6px #22d3ee);
      }

      h1 { font-size: clamp(28px, 4.2vw, 44px); line-height: 1.05; margin: 14px 0 8px; letter-spacing: -0.02em; }
      .sub { color: var(--muted); font-size: clamp(15px, 2.3vw, 18px); line-height: 1.6; }

      .cta { display: grid; grid-template-columns: 1fr auto; gap: 10px; margin-top: 22px; }
      .input {
        width: 100%; height: 48px; border-radius: 14px; border: 1px solid var(--border); padding: 0 14px; font-size: 16px; color: var(--fg);
        background: #0b1430; outline: none; transition: box-shadow .2s, border-color .2s;
      }
      .input:focus { box-shadow: 0 0 0 6px var(--focus); border-color: #4c61ff55; }
      .btn {
        height: 48px; padding: 0 18px; border-radius: 14px; border: 0; cursor: pointer; font-weight: 600; font-size: 15px; letter-spacing: .2px;
        background: linear-gradient(90deg, var(--accent), var(--accent-2)); color: #0b1020;
        box-shadow: 0 8px 18px #3b82f622, 0 0 0 1px #ffffff33 inset;
      }
      .btn:focus-visible { outline: none; box-shadow: 0 0 0 6px var(--focus), 0 8px 18px #3b82f622; }

      .meta { display: flex; flex-wrap: wrap; gap: 14px; align-items: center; margin-top: 18px; color: var(--muted); font-size: 14px; }
      .chip { display: inline-flex; align-items: center; gap: 8px; padding: 8px 12px; border: 1px solid var(--border); border-radius: 999px; background: #0e1734; }
      .dot { width: 10px; height: 10px; border-radius: 50%; background: radial-gradient(circle at 30% 30%, #22d3ee, #0ea5e9); box-shadow: 0 0 12px #22d3ee; }

      .progress { --p: 36; margin-top: 18px; height: 8px; border-radius: 10px; background: #0a1330; border: 1px solid var(--border); position: relative; overflow: hidden; }
      .progress::before { content: ""; position: absolute; inset: 0; width: calc(var(--p) * 1%); background: linear-gradient(90deg, var(--accent), var(--accent-2)); box-shadow: 0 0 16px #22d3ee66; }

      .socials { display: flex; gap: 10px; margin-top: 22px; }
      .icon-btn { display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 14px; border: 1px solid var(--border); background: #0e1734; color: var(--fg); text-decoration: none; transition: transform .08s ease, box-shadow .2s; }
      .icon-btn:hover { transform: translateY(-2px); box-shadow: 0 10px 24px #00000055; }
      .sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,1px,1px); white-space: nowrap; border: 0; }

      footer { text-align: center; color: var(--muted); font-size: 13px; margin-top: 22px; }

      /* Small screens */
      @media (max-width: 520px) {
        .cta { grid-template-columns: 1fr; }
        .btn { width: 100%; }
      }
    </style>
  </head>
  <body>
    <div class="stars"></div>
    <div class="twinkles"></div>

    <main class="wrap">
      <section class="card" role="dialog" aria-label="Coming soon">
        <header style="display:flex; align-items:center; gap:12px;">
          <span class="planet" aria-hidden="true"></span>
          <a class="logo" href="#" aria-label="Home">
            <strong style="font-weight:800; letter-spacing:-.02em; font-size:18px;">AstroSaar</strong>
          </a>
        </header>

        <h1>🪐 Launching Soon</h1>
        <p class="sub">Here to light your way, every step of the journey. We’re putting the finishing touches on something stellar—be the first to know when it goes live.</p>

        <!--<form class="cta" id="notify" autocomplete="on">-->
        <!--  <label class="sr-only" for="email">Email address</label>-->
        <!--  <input id="email" class="input" type="email" name="email" placeholder="Enter your email to get notified" required />-->
        <!--  <button class="btn" type="submit">Notify me</button>-->
        <!--</form>-->
        <div class="meta" aria-live="polite" id="feedback" hidden></div>

        <div class="meta">
          <span class="chip"><span class="dot" aria-hidden="true"></span><span>Private beta boarding soon</span></span>
          <span class="chip">100% privacy-first</span>
          <span class="chip">No spam, ever</span>
        </div>

        <div class="progress" style="--p: 36;" aria-label="Progress" title="36% complete"></div>

        <!--<nav class="socials" aria-label="Social links">-->
        <!--  <a class="icon-btn" href="#" aria-label="Follow on X / Twitter">-->
        <!--    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.244 2H21.5l-7.5 8.57L23 22h-6.844l-5.352-6.9L4.6 22H1.34l8.02-9.17L1 2h6.97l4.83 6.315L18.244 2zm-1.2 18h1.86L7.032 3.5H5.06L17.044 20z"/></svg>-->
        <!--    <span class="sr-only">X</span>-->
        <!--  </a>-->
        <!--  <a class="icon-btn" href="#" aria-label="Follow on Instagram">-->
        <!--    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7zm5 3.5A5.5 5.5 0 1 1 6.5 13 5.51 5.51 0 0 1 12 7.5zm0 2A3.5 3.5 0 1 0 15.5 13 3.5 3.5 0 0 0 12 9.5zm6.75-3.25a1.25 1.25 0 1 1-1.25 1.25 1.25 1.25 0 0 1 1.25-1.25z"/></svg>-->
        <!--    <span class="sr-only">Instagram</span>-->
        <!--  </a>-->
        <!--  <a class="icon-btn" href="#" aria-label="Connect on LinkedIn">-->
        <!--    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M4.98 3.5C4.98 4.88 3.86 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.5 8.02h4V23h-4zM8.5 8.02h3.84v2.04h.05c.53-1 1.84-2.06 3.79-2.06C20.6 8 23 10.3 23 14.53V23h-4v-7.37c0-1.76-.03-4.03-2.46-4.03-2.46 0-2.84 1.92-2.84 3.9V23h-4z"/></svg>-->
        <!--    <span class="sr-only">LinkedIn</span>-->
        <!--  </a>-->
        <!--</nav>-->

        <footer>
          <small>© <span id="year"></span> AstroSaar. All rights reserved.</small>
        </footer>
      </section>
    </main>

    <script>
      // Dynamic year
      document.getElementById('year').textContent = new Date().getFullYear();

      // Demo form handling (no backend). Replace with your endpoint later.
      const form = document.getElementById('notify');
      const email = document.getElementById('email');
      const feedback = document.getElementById('feedback');
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        const value = email.value.trim();
        if (!value) return;
        feedback.hidden = false;
        feedback.textContent = 'Thanks! We\'ll let you know when we launch.';
        email.value = '';
      });

      // Optional: set progress programmatically if you wire it up later
      // document.querySelector('.progress').style.setProperty('--p', 60);
    </script>
  </body>
</html>
