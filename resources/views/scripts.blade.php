{{-- Burger menu --}}

<script>
    const burgerIcon = document.querySelector('.navbar-burger');
    burgerIcon.addEventListener('click', () => {
        document.getElementById('nav-links').classList.toggle('is-active')
    })

</script>


{{-- Close notification --}}

<script>
    document.addEventListener('DOMContentLoaded', () => {
        (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
            const $notification = $delete.parentNode;

            $delete.addEventListener('click', () => {
                $notification.parentNode.removeChild($notification);
            });
        });
    });

</script>
