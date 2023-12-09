document.querySelectorAll('.toggle-replies').forEach(button => {
    button.addEventListener('click', () => {
        const replies = button.nextElementSibling;
        if (replies.style.display === 'block') {
            replies.style.display = 'none';
            button.textContent = 'Show Replies';
        } else {
            replies.style.display = 'block';
            button.textContent = 'Hide Replies';
        }
    });
});
