const navToggle = document.querySelector('[data-nav-toggle]');
const navLinks = document.querySelector('[data-nav-links]');

if (navToggle && navLinks) {
  navToggle.addEventListener('click', () => {
    const isOpen = navLinks.classList.toggle('open');
    navToggle.setAttribute('aria-expanded', isOpen);
  });

  navLinks.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
      if (window.innerWidth < 961) {
        navLinks.classList.remove('open');
        navToggle.setAttribute('aria-expanded', 'false');
      }
    });
  });
}

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener('click', (event) => {
    const target = document.querySelector(anchor.getAttribute('href'));
    if (target) {
      event.preventDefault();
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

const root = document.documentElement;
const themeToggle = document.querySelector('[data-theme-toggle]');
const themeLabel = document.querySelector('[data-theme-toggle-label]');
let storedTheme = null;
try {
  storedTheme = localStorage.getItem('theme');
} catch (error) {
  storedTheme = null;
}
const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');

const persistTheme = (value) => {
  try {
    localStorage.setItem('theme', value);
    storedTheme = value;
  } catch (error) {
    storedTheme = value;
  }
};

const applyTheme = (theme) => {
  const normalized = theme === 'dark' ? 'dark' : 'light';
  root.setAttribute('data-theme', normalized);
  if (themeToggle) {
    const isDark = normalized === 'dark';
    themeToggle.setAttribute('aria-pressed', isDark);
    themeToggle.setAttribute('aria-label', isDark ? 'Switch to light mode' : 'Switch to dark mode');
    if (themeLabel) {
      themeLabel.textContent = isDark ? 'Light mode' : 'Dark mode';
    }
  }
};

if (storedTheme) {
  applyTheme(storedTheme);
} else {
  applyTheme(mediaQuery.matches ? 'dark' : 'light');
}

if (themeToggle) {
  themeToggle.addEventListener('click', () => {
    const currentTheme = root.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
    const nextTheme = currentTheme === 'dark' ? 'light' : 'dark';
    applyTheme(nextTheme);
    persistTheme(nextTheme);
  });

  const handlePreferenceChange = (event) => {
    if (!storedTheme) {
      applyTheme(event.matches ? 'dark' : 'light');
    }
  };

  if (mediaQuery.addEventListener) {
    mediaQuery.addEventListener('change', handlePreferenceChange);
  } else if (mediaQuery.addListener) {
    mediaQuery.addListener(handlePreferenceChange);
  }
}

const portalModal = document.querySelector('[data-portal-modal]');
const portalOpeners = document.querySelectorAll('[data-portal-open]');
let lastFocusedTrigger = null;

const closePortal = () => {
  if (!portalModal) return;
  portalModal.classList.remove('is-open');
  portalModal.setAttribute('aria-hidden', 'true');
  document.body.classList.remove('portal-open');
  if (lastFocusedTrigger && typeof lastFocusedTrigger.focus === 'function') {
    lastFocusedTrigger.focus();
  }
};

const openPortal = (trigger) => {
  if (!portalModal) return;
  lastFocusedTrigger = trigger || null;
  portalModal.classList.add('is-open');
  portalModal.setAttribute('aria-hidden', 'false');
  document.body.classList.add('portal-open');
  if (navLinks && navLinks.classList.contains('open')) {
    navLinks.classList.remove('open');
    if (navToggle) {
      navToggle.setAttribute('aria-expanded', 'false');
    }
  }
  const closeButton = portalModal.querySelector('[data-portal-close]');
  if (closeButton) {
    closeButton.focus();
  }
};

portalOpeners.forEach((button) => {
  button.addEventListener('click', () => openPortal(button));
});

if (portalModal) {
  portalModal.addEventListener('click', (event) => {
    if (event.target === portalModal) {
      closePortal();
    }
  });

  portalModal.querySelectorAll('[data-portal-close]').forEach((closeButton) => {
    closeButton.addEventListener('click', closePortal);
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && portalModal.classList.contains('is-open')) {
      closePortal();
    }
  });
}
