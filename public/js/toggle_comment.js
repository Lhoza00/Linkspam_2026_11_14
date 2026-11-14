function toggleComment(btn) {
    const card = btn.closest('.post-card');
    const postBody = card.querySelector('.post-body');
    const commentBody = card.querySelector('.comment-body');
    const section = card.querySelector('.comment-section');

    const isVisible = getComputedStyle(section).display !== 'none';

    section.style.display = isVisible ? 'none' : 'flex';
    commentBody.style.display = isVisible ? 'none' : 'flex';
    postBody.style.display = isVisible ? 'flex' : 'none';

    if (!isVisible) {
        section.querySelector('input')?.focus();
    }
}