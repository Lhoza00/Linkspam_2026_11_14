function copyLink() {
    navigator.clipboard.writeText(window.location.href).catch(() => {});
    showToast('Link copied to clipboard!');
}