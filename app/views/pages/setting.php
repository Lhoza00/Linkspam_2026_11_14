<html lang="en" id="setting">
<?php require __DIR__ . '/../layout/head.php'; ?>
<style>
    :root {
        --bg: #F6F5F1;
        --surface: #FFFFFF;
        --border: #E4E2DC;
        --text: #1C1E1F;
        --text-soft: #6B6F76;
        --accent: #3D5A50;
        --accent-light: #E9EFEA;
        --danger: #B3452F;
        --danger-light: #F7EAE6;
        --radius: 10px;
    }
    main{
        margin-top: 4rem;
        min-height: calc(100vh - 60px);
    }
    section {
        width: 100%;
        max-width: 65%;
        margin: 0.5rem auto;
        border: 0px solid salmon;
    }

    /* Top tab bar */
    .topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 4px;
        padding: 0.5rem 0;
        border-bottom: 1px solid var(--border);
        
    }

    .nav-item {
        display: flex;
        align-items: center;
        gap: 8px;
        
        border: none;
        background: none;
        font-family: 'Inter', sans-serif;
        font-size: 1.2rem;
        font-weight: 500;
        color: var(--text-soft);
        cursor: pointer;
        white-space: nowrap;
        position: relative;
        transition: color .15s ease;
    }

    .nav-item svg {
        flex-shrink: 0;
        opacity: .8;
    }

    .nav-item:hover {
        color: var(--text);
    }

    .nav-item.active {
        color: var(--Main);
    }

    .nav-item.active svg {
        opacity: 1;
    }

    .nav-item::after {
        content: "";
        position: absolute;
        left: 14px;
        right: 14px;
        bottom: -1px;
        height: 2px;
        background: transparent;
        border-radius: 2px 2px 0 0;
        transition: background .15s ease;
    }

    .nav-item.active::after {
        background: var(--Main);
    }

    /* Main */
    .main {
        padding: 36px 44px 80px;
        min-width: 0;
    }

    .main-header {
        margin-bottom: 28px;
    }

    .main-header h1 {
        font-size: 24px;
        font-weight: 700;
    }

    .main-header p {
        color: var(--text-soft);
        font-size: 14px;
        margin-top: 6px;
    }

    .panel {
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: var(--radius);
        margin-bottom: 20px;
        overflow: hidden;
    }

    .panel-title {
        padding: 16px 20px;
        border-bottom: 1px solid var(--border);
        font-size: 14px;
        font-weight: 600;
    }

    .panel-title span {
        display: block;
        font-weight: 400;
        font-size: 12.5px;
        color: var(--text-soft);
        margin-top: 2px;
    }

    .row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        padding: 16px 20px;
        border-bottom: 1px solid var(--border);
    }

    .row:last-child {
        border-bottom: none;
    }

    .row-label {
        font-size: 14px;
        font-weight: 500;
    }

    .row-desc {
        font-size: 12.5px;
        color: var(--text-soft);
        margin-top: 3px;
        max-width: 420px;
    }

    /* Toggle switch */
    .switch {
        position: relative;
        width: 40px;
        height: 23px;
        flex-shrink: 0;
        border-radius: 999px;
        background: var(--border);
        border: none;
        cursor: pointer;
        transition: background .18s ease;
    }

    .switch::after {
        content: "";
        position: absolute;
        top: 2px;
        left: 2px;
        width: 19px;
        height: 19px;
        border-radius: 50%;
        background: var(--surface);
        box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
        transition: transform .18s ease;
    }

    .switch.on {
        background: var(--Main);
    }

    .switch.on::after {
        transform: translateX(17px);
    }

    /* Inputs */
    input[type=text],
    input[type=email],
    select {
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        padding: 9px 12px;
        border-radius: 8px;
        border: 1px solid var(--border);
        background: var(--bg);
        color: var(--text);
        width: 220px;
        outline: none;
        transition: border-color .15s ease;
    }

    input[type=text]:focus,
    input[type=email]:focus,
    select:focus {
        border-color: var(--Main);
    }

    .mono-id {
        font-family: 'JetBrains Mono', monospace;
        font-size: 12.5px;
        color: var(--text-soft);
        background: var(--bg);
        padding: 4px 8px;
        border-radius: 6px;
        border: 1px solid var(--border);
    }

    /* Theme swatches */
    .swatches {
        display: flex;
        gap: 10px;
    }

    .swatch {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        cursor: pointer;
        border: 2px solid transparent;
        box-shadow: 0 0 0 1px var(--border);
    }

    .swatch.selected {
        border-color: var(--surface);
        box-shadow: 0 0 0 2px var(--Main);
    }

    /* Danger zone */
    .danger-panel {
        border-color: var(--danger-light);
    }

    .danger-panel .panel-title {
        border-bottom-color: var(--danger-light);
        color: var(--danger);
    }

    .btn {
        font-family: 'Inter', sans-serif;
        font-size: 13.5px;
        font-weight: 600;
        padding: 8px 14px;
        border-radius: 8px;
        border: 1px solid var(--border);
        background: var(--surface);
        color: var(--text);
        cursor: pointer;
        transition: opacity .15s ease;
    }

    .btn:hover {
        opacity: .75;
    }

    .btn-danger {
        background: var(--danger-light);
        border-color: var(--danger-light);
        color: var(--danger);
    }

    .btn-primary {
        background: var(--Main);
        border-color: var(--Main);
        color: #fff;
    }

    .save-bar {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 4px;
    }

    .section {
        display: none;
    }

    .section.active {
        display: block;
        animation: fade .2s ease;
    }

    @keyframes fade {
        from {
            opacity: 0;
            transform: translateY(4px);
        }

        to {
            opacity: 1;
            transform: none;
        }
    }

    .toast {
        position: fixed;
        bottom: 24px;
        left: 50%;
        transform: translateX(-50%) translateY(20px);
        background: var(--text);
        color: #fff;
        font-size: 13.5px;
        font-weight: 500;
        padding: 10px 18px;
        border-radius: 8px;
        opacity: 0;
        pointer-events: none;
        transition: opacity .2s ease, transform .2s ease;
    }

    .toast.show {
        opacity: 1;
        transform: translateX(-50%) translateY(0);
    }

    @media (max-width:760px) {
        .topbar {
            padding: 0 20px;
        }

        .main {
            padding: 28px 20px 60px;
        }

        .row {
            flex-wrap: wrap;
        }

        input[type=text],
        input[type=email],
        select {
            width: 100%;
        }
    }

    :focus-visible {
        outline: 2px solid var(--Main);
        outline-offset: 2px;
    }
</style>

<body>
    <?php require __DIR__ . '/../layout/header.php'; ?>
    <?php require __DIR__ . '/../components/sidebar.php'; ?>
    <main>
        <section class="navbar">
        <nav class="topbar">
            <button class="nav-item active" data-section="profile">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="8" r="4" />
                    <path d="M4 20c0-4 4-6 8-6s8 2 8 6" />
                </svg>
                Profile
            </button>
            <button class="nav-item" data-section="appearance">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="9" />
                    <path d="M12 3a9 9 0 000 18z" fill="currentColor" stroke="none" />
                </svg>
                Appearance
            </button>
            <button class="nav-item" data-section="account">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="5" width="18" height="14" rx="2" />
                    <path d="M3 10h18" />
                </svg>
                Account
            </button>
        </nav>
        </section>
        <section class="section active" id="profile">
      <div class="main-header">
        <h1>Profile</h1>
        <p>How you appear across the app.</p>
      </div>

      <div class="panel">
        <div class="panel-title">Basic info</div>
        <div class="row">
          <div>
            <div class="row-label">Display name</div>
            <div class="row-desc">Shown on your profile and in shared items.</div>
          </div>
          <input type="text" value="Jordan Ellis">
        </div>
        <div class="row">
          <div>
            <div class="row-label">Email</div>
            <div class="row-desc">Used for sign-in and important updates.</div>
          </div>
          <input type="email" value="jordan@example.com">
        </div>
        <div class="row">
          <div>
            <div class="row-label">Language</div>
          </div>
          <select>
            <option>English</option>
            <option>Español</option>
            <option>Français</option>
            <option>Deutsch</option>
          </select>
        </div>
      </div>

      <div class="save-bar">
        <button class="btn" onclick="showToast('Changes discarded')">Cancel</button>
        <button class="btn btn-primary" onclick="showToast('Profile saved')">Save changes</button>
      </div>
    </section>

    <!-- APPEARANCE -->
    <section class="section" id="appearance">
      <div class="main-header">
        <h1>Appearance</h1>
        <p>Adjust how the app looks on your screen.</p>
      </div>

      <div class="panel">
        <div class="panel-title">Theme</div>
        <div class="row">
          <div>
            <div class="row-label">Accent color</div>
            <div class="row-desc">Used for buttons, links, and highlights.</div>
          </div>
          <div class="swatches">
            <div class="swatch selected" style="background:#3D5A50" onclick="selectSwatch(this)"></div>
            <div class="swatch" style="background:#3D5C8C" onclick="selectSwatch(this)"></div>
            <div class="swatch" style="background:#8C5A3D" onclick="selectSwatch(this)"></div>
            <div class="swatch" style="background:#6B4E8C" onclick="selectSwatch(this)"></div>
          </div>
        </div>
        <div class="row">
          <div>
            <div class="row-label">Compact layout</div>
            <div class="row-desc">Reduce spacing to fit more on screen.</div>
          </div>
          <button class="switch" onclick="toggle(this)"></button>
        </div>
        <div class="row">
          <div>
            <div class="row-label">Reduce motion</div>
            <div class="row-desc">Minimize animations throughout the app.</div>
          </div>
          <button class="switch" onclick="toggle(this)"></button>
        </div>
      </div>
    </section>

    <!-- ACCOUNT -->
    <section class="section" id="account">
      <div class="main-header">
        <h1>Account</h1>
        <p>Your plan, identifiers, and account-level actions.</p>
      </div>

      <div class="panel">
        <div class="panel-title">Account details</div>
        <div class="row">
          <div class="row-label">Account ID</div>
          <span class="mono-id"><?= htmlspecialchars($_SESSION['userID']) ?></span>
        </div>
        <div class="row">
          <div class="row-label">Plan</div>
          <span class="row-desc" style="margin:0;">Pro — renews Sept 12, 2026</span>
        </div>
        <div class="row">
          <div class="row-label">Log out</div>
          <a href="logout"><span class="mono-id" style="padding: 200px">Log-out</span></a>
        </div>
      </div>

    </section>
    </main>
    <?php require __DIR__ . '/../layout/footer.php'; ?>
</body>
<script>
  document.querySelectorAll('.nav-item').forEach(item => {
    item.addEventListener('click', () => {
      document.querySelectorAll('.nav-item').forEach(i => i.classList.remove('active'));
      document.querySelectorAll('.section').forEach(s => s.classList.remove('active'));
      item.classList.add('active');
      document.getElementById(item.dataset.section).classList.add('active');
    });
  });

  function toggle(el){
    el.classList.toggle('on');
  }

  function selectSwatch(el){
    el.parentElement.querySelectorAll('.swatch').forEach(s => s.classList.remove('selected'));
    el.classList.add('selected');
  }

  let toastTimer;
  function showToast(msg){
    const toast = document.getElementById('toast');
    toast.textContent = msg;
    toast.classList.add('show');
    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => toast.classList.remove('show'), 2200);
  }
</script>
<script>
    const btnPost = document.querySelector('.btnPost');
    const sectionPost = document.querySelector('.SectionPost');

    btnPost.addEventListener('click', () => {
        sectionPost.classList.toggle('active');
    });
</script>

</html>