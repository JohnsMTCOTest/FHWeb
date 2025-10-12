(function() {
  // Create a root div if it doesn't exist
  const root = document.getElementById('passagecare-root');
  if (!root) return;

  // Clear previous content
  root.innerHTML = '';

  // Add dummy UI for testing
  const header = document.createElement('h2');
  header.textContent = "Passage Care Widget (Test Mode)";
  root.appendChild(header);

  const staffBtn = document.createElement('button');
  staffBtn.textContent = "Staff View (Dummy)";
  staffBtn.onclick = () => alert("Staff functionality placeholder for testing");
  root.appendChild(staffBtn);

  const familyBtn = document.createElement('button');
  familyBtn.textContent = "Family View (Dummy)";
  familyBtn.onclick = () => alert("Family functionality placeholder for testing");
  root.appendChild(familyBtn);

  const themeMsg = document.createElement('p');
  themeMsg.textContent = "This widget adapts to site theme automatically (autoTheme test)";
  root.appendChild(themeMsg);
})();
