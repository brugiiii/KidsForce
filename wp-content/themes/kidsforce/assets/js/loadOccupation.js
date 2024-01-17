const { monday, tuesday, wednesday, thursday, friday } = settings;

const generateDaySkeleton = (day) => `
    <li class="occupations-list__item d-flex align-items-center">
        <h3 class="occupations-list__title text-center mb-0">
            ${day}
        </h3>
        <ul>
            ${Array(3).fill('<li class="occupation-skeleton"></li>').join('')}
        </ul>
    </li>
`;

const generateOccupationsList = () => `
    <ul class="occupations-list position-relative">
        ${[monday, tuesday, wednesday, thursday, friday].map(generateDaySkeleton).join('')}
    </ul>
`;

const occupationSkeleton = generateOccupationsList();

const loadOccupations = (postId) => {
    $('.occupations-content').html(occupationSkeleton);

    $.ajax({
        url: settings.ajax_url,
        type: 'POST',
        data: {
            action: 'display_posts',
            id: postId,
        },
        success: function (response) {
            $('.occupations-content').html(response);
        },
        error: function (error) {
            console.log(error);
        }
    });
};

$('.occupation-ctrl').on("click", ".occupation-ctrl__button", function () {
    const $this = $(this);

    $('.occupation-ctrl__button').not($this).removeClass('current');
    $this.addClass('current');

    const postId = $this.data('post-id');
    loadOccupations(postId);
});

$(function () {
    $('.occupation-ctrl .occupation-ctrl__button').first().trigger("click");
});
