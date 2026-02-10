
<!DOCTYPE html>
<html lang='{{ str_replace('_', '-', app()->getLocale()) }}'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name='csrf-token' content='{{ csrf_token() }}'>
        <meta name='author' content='Mark Jason Penote Espelita'>
        <meta name='keywords' content='keyword1, keyword2'>
        <meta name='description' content='Dolorem natus ab illum beatae error voluptatem incidunt quis. Cupiditate ullam doloremque delectus culpa. Autem harum dolorem praesentium dolorum necessitatibus iure quo. Et ea aut voluptatem expedita.'>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href='{{ url('assets/bootstrap/bootstrap.min.css') }}' rel='stylesheet'>
        <!-- FontAwesome for icons -->
        <link href='{{ url('assets/font-awesome/css/all.min.css') }}' rel='stylesheet'>
        <link rel='stylesheet' href='{{ url('assets/custom/style.css') }}'>
        <link rel='icon' href='{{ url('design/img/logo/logo.jpg') }}'>
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class='font-sans antialiased'>

        <!-- Sidebar for Desktop View -->
        <div class='sidebar' id='mobileSidebar'>
            <div class='logo'>
                <img src='{{ url('design/img/logo/logo.jpg') }}' alt='' width='100%'>
            </div>

            @php
                if (Auth::user()->role === 'admin') {
                    $navLinks = [
                        [
                            'url' => 'dashboard',
                            'icon' => 'fas fa-tachometer-alt',
                            'label' => 'Dashboard',
                            'active' => request()->is('dashboard'),
                        ],
                        [
                            'url' => '/',
                            'icon' => 'fas fa-globe',
                            'label' => 'Visit Site',
                            'active' => request()->is('/'),
                        ],
                        [
                            'url' => 'departments',
                            'icon' => 'fas fa-house',
                            'label' => 'Departments',
                            'active' => request()->is('departments', 'create-departments', 'trash-departments', 'show-departments/*', 'edit-departments/*', 'delete-departments/*', 'departments-search*'),
                        ],
                        [
                            'url' => 'announcements',
                            'icon' => 'fas fa-bullhorn',
                            'label' => 'Announcements',
                            'active' => request()->is('announcements', 'create-announcements', 'trash-announcements', 'show-announcements/*', 'edit-announcements/*', 'delete-announcements/*', 'announcements-search*'),
                        ],
                        [
                            'url' => 'events',
                            'icon' => 'fas fa-calendar-alt',
                            'label' => 'Events',
                            'active' => request()->is('events', 'create-events', 'trash-events', 'show-events/*', 'edit-events/*', 'delete-events/*', 'events-search*'),
                        ],
                        [
                            'url' => 'activity-logs',
                            'icon' => 'fas fa-calendar-alt',
                            'label' => 'Logs',
                            'active' => request()->is('activity-logs', 'create-logs', 'show-logs/*', 'edit-logs/*', 'delete-logs/*', 'logs-search*'),
                        ],
                        [
                            'url' => 'users',
                            'icon' => 'fas fa-users',
                            'label' => 'Users',
                            'active' => request()->is('users', 'create-users', 'trash-users', 'show-users/*', 'edit-users/*', 'delete-users/*', 'users-search*'),
                        ],
                        [
                            'url' => 'profiles',
                            'icon' => 'fas fa-user',
                            'label' => 'My Profile',
                            'active' => request()->is('profiles', 'create-profiles', 'trash-profiles', 'show-profiles/*', 'edit-profiles/*', 'delete-profiles/*', 'profiles-search*'),
                        ],
                    ];
                }

                if (Auth::user()->role === 'user') {
                    $navLinks = [
                        [
                            'url' => 'dashboard',
                            'icon' => 'fas fa-tachometer-alt',
                            'label' => 'Dashboard',
                            'active' => request()->is('dashboard'),
                        ],
                        [
                            'url' => '/',
                            'icon' => 'fas fa-globe',
                            'label' => 'Visit Site',
                            'active' => request()->is('/'),
                        ],
                        [
                            'url' => 'profiles',
                            'icon' => 'fas fa-user',
                            'label' => 'My Profile',
                            'active' => request()->is('profiles', 'create-profiles', 'trash-profiles', 'show-profiles/*', 'edit-profiles/*', 'delete-profiles/*', 'profiles-search*'),
                        ],
                    ];
                }
            @endphp

            @foreach ($navLinks as $link)
                <a href="{{ url($link['url']) }}" class="{{ $link['active'] ? 'active' : '' }}">
                    <i class="{{ $link['icon'] }}"></i> {{ $link['label'] }}
                </a>
            @endforeach

            <a href="/release-notes.html">
                <i class="fas fa-file-alt"></i> Release Notes
            </a>

            <a href="{{ url('user/profile') }}">
                <i class="fas fa-user"></i> {{ Auth::user()->name }}
            </a>

        </div>

        <!-- Top Navbar -->
        <nav class='navbar navbar-expand-lg navbar-dark'>
            <div class='container-fluid'>
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav'
                    aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation' onclick='toggleSidebar()'>
                    <i class='fas fa-bars'></i>
                </button>
            </div>
        </nav>

        <x-main-notification />

        <div class='content'>
            @yield('content')

            <!-- Toggle Button -->
            <button id="toggleButton">
                <i class="fas fa-user"></i>
                <span id="chatCountBadge">0</span>
            </button>

            <!-- Dark background overlay -->
            <div id="overlay" style="display: none;"></div>

            <!-- Styles -->
            <style>
                body {
                    margin: 0;
                    font-family: Arial, sans-serif;
                }

                /* SIDEBAR */
                #friendsSidebar {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    max-width: 30%;
                    height: 100vh;
                    background: #ffffff;
                    border-right: 1px solid #e0e0e0;
                    padding: 1rem;
                    overflow-y: auto;
                    display: none;
                    z-index: 1001;
                    box-shadow: 4px 0 12px rgba(0, 0, 0, 0.05);
                }

                .friend {
                    padding: 12px 16px;
                    margin-bottom: 10px;
                    background: #f8f9fa;
                    border-radius: 12px;
                    display: flex;
                    align-items: center;
                    gap: 12px;
                    cursor: pointer;
                    transition: all 0.2s ease-in-out;
                    border: 1px solid transparent;
                    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03);
                }

                .friend:hover {
                    background: #e9f5ff;
                    border-color: #007bff;
                    transform: translateY(-2px);
                }

                #toggleButton {
                    position: fixed;
                    bottom: 2rem;
                    right: 2rem;
                    width: 56px;
                    height: 56px;
                    background: linear-gradient(135deg, #005f9f, #0084ff);
                    color: white;
                    border: none;
                    border-radius: 50%;
                    cursor: pointer;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 22px;
                    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
                    transition: background 0.3s, transform 0.2s;
                }

                #toggleButton:hover {
                    transform: scale(1.1);
                    background: linear-gradient(135deg, #0072ce, #009bff);
                }

                #chatCountBadge {
                    position: absolute;
                    top: -4px;
                    right: -4px;
                    background-color: red;
                    color: white;
                    font-size: 20px;
                    font-weight: bold;
                    padding: 2px 5px;
                    border-radius: 50%;
                    line-height: 1;
                }

                /* OVERLAY */
                #overlay {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100vw;
                    height: 100vh;
                    background-color: rgba(0, 0, 0, 0.4);
                    backdrop-filter: blur(3px);
                    z-index: 1000;
                    display: none;
                }

                /* CHATBOX */
                .chatbox {
                    width: 100%;
                    max-width: 400px;
                    height: 50vh;
                    background: white;
                    border: none;
                    border-radius: 20px 20px 0 0;
                    box-shadow: none;
                    display: flex;
                    flex-direction: column;
                }

                .chatbox-header {
                    background: #0C8EFD;
                    border-radius: 20px 20px 0 0;
                    color: white;
                    padding: 12px 15px;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    font-weight: bold;
                }

                .chatbox-body {
                    padding: 10px;
                    flex: 1;
                    overflow-y: auto;
                }

                .chatbox-footer {
                    padding: 8px;
                    border-top: 1px solid #ccc;
                }

                .chatbox-footer textarea {
                    width: 100%;
                    padding: 12px;
                    border: 1px solid #ddd;
                    border-radius: 8px;
                    font-size: 16px;
                }

                .mine .msg-container {
                    display: flex;
                    flex-direction: column;
                    align-items: flex-end; /* Align timestamp to the right */
                    max-width: 80%;
                }

                /* MESSAGES */
                .chat-msg {
                    display: flex;
                    margin: 10px 0;
                }

                .chat-msg.mine {
                    justify-content: flex-end;
                }

                .chat-msg.other {
                    justify-content: flex-start !important;
                }

                .chat-msg .bubble {
                    display: inline-block;
                    padding: 10px 14px;
                    border-radius: 18px;
                    position: relative;
                    font-size: 14px;
                    color: #000;
                    word-break: break-word;
                    max-width: 80%; /* still useful for long messages */
                    width: fit-content;
                }

                .chat-msg.other .bubble {
                    background-color: #cacaca;
                    align-self: flex-start; /* ensure it's not stretched */
                }

                .chat-msg.other .bubble::after {
                    content: "";
                    position: absolute;
                    top: 10px;
                    left: -6px;
                    width: 0;
                    height: 0;
                    border-top: 8px solid transparent;
                    border-right: 8px solid #cacaca;
                    border-bottom: 8px solid transparent;
                }

                .chat-msg.mine .bubble {
                    background: linear-gradient(135deg, #0084ff, #44bef1);
                    color: white;
                }

                .chat-msg.mine .bubble::after {
                    content: "";
                    position: absolute;
                    top: 10px;
                    right: -6px;
                    width: 0;
                    height: 0;
                    border-top: 8px solid transparent;
                    border-left: 8px solid #44bef1;
                    border-bottom: 8px solid transparent;
                }

                .timestamp {
                    font-size: 11px;
                    margin-top: 5px;
                    color: #000000;
                    text-align: right;
                }

                /* File upload */

                .preview-box {
                    margin-bottom: 10px;
                }

                .preview-box img {
                    max-width: 100px;
                    margin-right: 10px;
                }

                .file-icon {
                    font-size: 18px;
                    cursor: pointer;
                    margin-right: 10px;
                    color: #444;
                }

                /* MEDIA QUERY FOR MOBILE */
                @media (max-width: 768px) {
                    #friendsSidebar {
                        width: 100%;
                        max-width: none;
                        padding: 0.8rem;
                    }

                    .chatbox {
                        width: 100vw;
                        height: 90vh;
                        border-radius: 0;
                    }

                    #chatboxes-container {
                        right: 0 !important;
                    }

                    #toggleButton {
                        width: 50px;
                        height: 50px;
                        bottom: 2rem;
                        right: 1rem;
                        font-size: 20px;
                    }

                    .chatbox-footer input {
                        padding: 10px;
                        font-size: 14px;
                    }

                    .chat-msg .bubble {
                        font-size: 13px;
                        max-width: 85%;
                    }
                }
            </style>

            <!-- Make sure this comes BEFORE the script -->
            <x-side-chat :chats="App\Models\Chats::all()" />

            <!-- Chat Files Modal HTML -->
            <div class="modal fade" id="chatFiles" tabindex="-1" aria-labelledby="chatFilesLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="chatFilesLabel">Files</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="chat-files" style=""></div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Chat Files Modal HTML -->

            <!-- Chatbox Container -->
            <div id="chatboxes-container" style="position: fixed; bottom: 0; right: 90px; display: flex; gap: 10px; z-index: 1200;"></div>

        </div>

        {{-- apex charts --}}

        <script src="{{ url('assets/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Bootstrap JS and dependencies -->
        <script src='{{ url('assets/bootstrap/bootstrap.bundle.min.js') }}'></script>

        <!-- jQuery CDN -->
        <script src="{{ url('assets/jquery/jquery.min.js') }}"></script>
        <script src="{{ url('assets/sweetalert/sweetalert.min.js') }}"></script>

        <!-- Script should be AFTER x-side-chat -->
        <script>
            $(document).ready(function () {

                $(document).on('click', '.show-chat-files', function () {
                    let chatId = $(this).attr('data-id');
                    $('.chat-files').css({
                        display: 'block',
                    });
                    $('.chat-files').html(`
                        <div style="display: flex; justify-content: center; align-items: center;">
                            <div class="spinner-border"></div>
                        </div>
                    `);
                    $.post('/chat-files', {
                        chatId: chatId,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    }, function (res) {
                        $('.chat-files').html("");
                        $('.chat-files').css({
                            display: 'flex',
                            flexWrap: 'wrap',
                            gap: '10px'
                        });

                        if (res.length === 0) {
                            $('.chat-files').css({
                                display: 'block',
                            });
                            $('.chat-files').html(`
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <i>No Files</i>
                                </div>
                            `);
                        }

                        res.forEach(file => {
                            const fileExtension = file.original_name.split('.').pop().toLowerCase();
                            const isImage = ['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(fileExtension);
                            const filePath = '/storage/' + file.path;

                            if (isImage) {
                                $('.chat-files').append(`
                                    <div style="width: 100px;">
                                        <a href="${filePath}" target="_blank">
                                            <img src="${filePath}" alt="${file.original_name}" style="width: 100%; height: auto;" class="img-thumbnail">
                                        </a>
                                    </div>
                                `);
                            } else {
                                $('.chat-files').append(`
                                    <div style="width: 100px; text-align: center;">
                                        <i class="fas fa-file fa-2x mb-1"></i><br>
                                        <a href="${filePath}" target="_blank" style="font-size: 12px;">${file.original_name}</a>
                                    </div>
                                `);
                            }
                        });
                    }).fail(err => {
                        console.log(err)
                    });
                });


                $('#toggleButton').click(function () {
                    $('#friendsSidebar').fadeToggle(200);
                    $('#overlay').fadeToggle(200);
                });

                // chat seen couter

                $('#chatCountBadge').text(0);

                const chatSeenCounterPolling = new PollingManager({
                    url: `/chat-history`, // API to fetch data
                    delay: 5000, // Poll every 5 seconds
                    failRetryCount: 3, // Retry on failure
                    onSuccess: (chats) => {

                        let chatSeenCounter = 0;

                        chats.forEach(chat => {
                            chatSeenCounter += chat.seen ? 0 : 1;
                        });

                        chatSeenCounter == 0 ? $('#chatCountBadge').text(0) : $('#chatCountBadge').text(chatSeenCounter)
                    },
                    onError: (error) => {
                        console.error("Error fetching data:", error);
                    }
                });

                // Start polling
                chatSeenCounterPolling.start();

                // end chat seen counter

                $('#overlay').click(function () {
                    $('#friendsSidebar').fadeOut(200);
                    $('#overlay').fadeOut(200);
                });

                $('.friend').click(function () {
                    const name = $(this).data('name');
                    const friend_id = $(this).data('id'); // ✅ get friend ID

                    // Prevent duplicate chatboxes
                    if ($('#chatbox-' + friend_id).length > 0) return;

                    let auth_id = null; // This is the current logged-in user's ID

                    $.get('/user', function (res) {
                        auth_id = res.id;

                        // create new chat

                        $.get('/initialize-chat/' + auth_id + '/' + friend_id, function (res) {

                            const polling = new PollingManager({
                                url: `/fetch-messages/${res}`, // API to fetch data
                                delay: 5000, // Poll every 5 seconds
                                failRetryCount: 3, // Retry on failure
                                onSuccess: (messageResponse) => {

                                    const chatId = messageResponse.chatId;
                                    const chatboxSelector = `#chatbox-${chatId}`;

                                    // Build messages HTML
                                    let messageHtml = '';
                                    messageResponse.messages.forEach(msg => {
                                        const isMine = msg.users_id === auth_id;

                                        const timestamp = new Date(msg.created_at).toLocaleString('en-US', {
                                            weekday: 'long',
                                            year: 'numeric',
                                            month: 'long',
                                            day: 'numeric',
                                            hour: 'numeric',
                                            minute: '2-digit',
                                            hour12: true,
                                        });

                                        function formatMessage(text) {
                                            // Convert URLs to clickable links
                                            const urlPattern = /(\bhttps?:\/\/[^\s<>"]+[^\s<>"'.])/gi;
                                            let linkedText = text.replace(urlPattern, (url) => {
                                                return `<a href="${url}" target="_blank" rel="noopener noreferrer">${url}</a>`;
                                            });

                                            // Convert newlines (\n) into <br> tags
                                            return linkedText.replace(/\n/g, '<br>');
                                        }

                                        // Handle attachments (images or files)
                                        let attachmentsHtml = '';
                                        if (msg.files && msg.files.length > 0) {
                                            msg.files.forEach(file => {
                                                const ext = file.path.split('.').pop().toLowerCase();
                                                const isImage = ['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(ext);
                                                const fileUrl = `/storage/${file.path}`;

                                                if (isImage) {
                                                    attachmentsHtml += `
                                                        <div class="chat-attachment">
                                                            <a href="${fileUrl}">
                                                                <img src="${fileUrl}" alt="${file.original_name}" style="max-width: 100%; margin-top: 5px; border-radius: 8px;">
                                                            </a>
                                                        </div>`;
                                                } else {
                                                    attachmentsHtml += `
                                                        <div class="chat-attachment">
                                                            <a href="${fileUrl}" target="_blank">
                                                                ${file.original_name}
                                                            </a>
                                                        </div>`;
                                                }
                                            });
                                        }

                                        // Append the message with optional attachments
                                        messageHtml += `
                                            <div class="chat-msg ${isMine ? 'mine' : 'other'}">
                                                <div class="msg-container">
                                                    <div class="bubble">
                                                        ${formatMessage(msg.message)}
                                                        ${attachmentsHtml}
                                                    </div>

                                                    <div class="timestamp">
                                                        ${timestamp}
                                                        ${(isMine && msg.message !== 'Unsent a message')
                                                            ? `<i class="fa fa-trash unsent-chat text-danger" data-id="${msg.id}"></i>`
                                                            : ''}
                                                    </div>

                                                </div>
                                            </div>
                                        `;
                                    });

                                    // If chatbox already exists, update messages only
                                    if ($(chatboxSelector).length > 0) {
                                        $(`${chatboxSelector} .chatbox-body`).html(messageHtml);
                                    } else {
                                        // Otherwise, create a new chatbox
                                        const chatbox = `
                                            <div class="chatbox" id="chatbox-${chatId}">
                                                <div class="chatbox-header">
                                                    <span>${messageResponse.chat.name}</span>
                                                    <button data-bs-toggle="modal" data-bs-target="#chatFiles" data-id="${chatId}" class="show-chat-files" title="Show Files"
                                                            style="background:none;border:none;color:white;font-size:16px;"><i class="fa fa-file"></i></button>
                                                    <button data-id="${chatId}" class="delete-chat" title="Delete Conversation"
                                                            style="background:none;border:none;color:white;font-size:16px;"><i class="fa fa-trash"></i></button>
                                                    <button class="close-chat" title="Close"
                                                            style="background:none;border:none;color:white;font-size:16px;"><i class="fa fa-times"></i></button>
                                                </div>

                                                <div class="chatbox-body">
                                                    ${messageHtml}
                                                </div>

                                                <div class="preview-box" id="file-preview-${chatId}"></div>

                                                <div class="chatbox-footer">
                                                    <label class="file-icon">
                                                        <i class="fas fa-paperclip"></i>
                                                        <input type="file" id="file-input-${chatId}" multiple style="display: none;">
                                                    </label>

                                                    <textarea class="chat-input" placeholder="Type a message…" rows="1"></textarea>

                                                    <button type="submit" class="send-btn" title="Send" id="send-btn">
                                                        <i class="fas fa-paper-plane"></i>
                                                    </button>
                                                </div>
                                        `;

                                        $('#chatboxes-container').append(chatbox);

                                        // File Preview with Remove Option

                                        let selectedFiles = [];

                                        // Handle file selection
                                        $('#file-input-' + chatId).on('change', function (e) {
                                            selectedFiles = Array.from(e.target.files);
                                            renderFilePreviews();
                                        });

                                        // Render file previews
                                        function renderFilePreviews() {
                                            $('#file-preview-' + chatId).empty();

                                            selectedFiles.forEach((file, index) => {
                                                const isImage = file.type.startsWith('image/');
                                                const fileItem = $('<div>')
                                                    .addClass('file-item')
                                                    .attr('data-index', index)
                                                    .css({
                                                        display: 'inline-block',
                                                        position: 'relative',
                                                        marginRight: '10px',
                                                        marginBottom: '10px'
                                                    });

                                                if (isImage) {
                                                    const reader = new FileReader();
                                                    reader.onload = function (e) {
                                                        fileItem.append(`<img src="${e.target.result}" alt="${file.name}" style="max-width:80px;">`);
                                                        fileItem.append(`<span class="remove-file" style="position:absolute;top:0;right:0;background:#ff4444;color:#fff;border-radius:50%;width:18px;height:18px;line-height:18px;text-align:center;font-size:12px;cursor:pointer;">&times;</span>`);
                                                        $('#file-preview-' + chatId).append(fileItem);
                                                    };
                                                    reader.readAsDataURL(file);
                                                } else {
                                                    fileItem.append(`<div>${file.name}</div>`);
                                                    fileItem.append(`<span class="remove-file" style="margin-left:10px;color:red;cursor:pointer;">[Remove]</span>`);
                                                    $('#file-preview-' + chatId).append(fileItem);
                                                }
                                            });
                                        }

                                        // Handle file removal
                                        $(document).on('click', '.remove-file', function () {
                                            const index = $(this).closest('.file-item').data('index');
                                            selectedFiles.splice(index, 1);
                                            renderFilePreviews();
                                        });

                                        // Send Button

                                        $(`#chatbox-${chatId} .send-btn`).click(function () {
                                            let chatInput = $(`#chatbox-${chatId} .chat-input`).val();
                                            let usersId = auth_id;
                                            let hasAttachments = selectedFiles.length > 0 ? 1 : 0;

                                            $(`#chatbox-${chatId} .chatbox-body`).append(`
                                                <div class="chat-msg mine">
                                                    <div class="msg-container" style="width: 100%">
                                                        <div class="bubble d-flex align-items-center">
                                                            <div class="spinner-border me-2" style="width: 10px; height: 10px;"></div>
                                                            <span>Sending...</span>
                                                        </div>
                                                        <div class="timestamp">just now</div>
                                                    </div>
                                                    <div id="latest-message"></div>
                                                </div>
                                            `);

                                            setTimeout(() => {
                                                document.querySelector(`#chatbox-${chatId} #latest-message`)?.scrollIntoView({ behavior: 'smooth' });
                                            }, 50);

                                            // First: send message
                                            $.post('/send-chat', {
                                                'hasAttachments': hasAttachments,
                                                'message': chatInput,
                                                'chats_id': chatId,
                                                'senders_id': usersId,
                                                "_token": $('meta[name="csrf-token"]').attr('content')
                                            }, function (res) {
                                                const messageId = res.message_id;

                                                // If no files, we're done
                                                if (!hasAttachments) {
                                                    clearChatInput(chatId);
                                                    return;
                                                }

                                                // Else, upload files linked to that message
                                                const formData = new FormData();
                                                formData.append('chats_id', chatId);
                                                formData.append('messages_id', messageId);
                                                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

                                                selectedFiles.forEach(file => {
                                                    formData.append('files[]', file);
                                                });

                                                $.ajax({
                                                    url: '/upload-files',
                                                    method: 'POST',
                                                    data: formData,
                                                    contentType: false,
                                                    processData: false,
                                                    success: function (uploadRes) {
                                                        clearChatInput(chatId);
                                                    },
                                                    error: function (err) {
                                                        console.error('File upload failed:', err);
                                                    }
                                                });

                                            }).fail(function (err) {
                                                console.error('Message failed:', err);
                                            });
                                        });

                                        function clearChatInput(chatId) {
                                            $(`#chatbox-${chatId} .chat-input`).val("");
                                            $('#file-preview-' + chatId).empty();
                                            selectedFiles = [];
                                        }

                                        // end of the sent button
                                    }
                                },
                                onError: (error) => {
                                    console.error("Error fetching data:", error);
                                    // Your custom error handling logic
                                }
                            });

                            // Start polling
                            polling.start();

                        }).fail(err => {
                            console.log(err)
                        });

                    })
                });

                // Delegate close event
                $(document).on('click', '.close-chat', function () {
                    $(this).closest('.chatbox').remove();
                });

                // Delegate close event
                $(document).on('click', '.delete-chat', function () {
                    let chatId = $(this).attr('data-id');

                    Swal.fire({
                        title: "Do you want to delete this chat? It will be gone forever, and the other person might be confused.",
                        showDenyButton: true,
                        showCancelButton: true,
                        confirmButtonText: "Yes",
                        denyButtonText: `Don't delete`
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {

                            Swal.fire({
                                title: 'Deleting...',
                                text: '',
                                showConfirmButton: false,
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                            });

                            $.post('/delete-chat', {
                                chatId: chatId,
                                _token: $('meta[name="csrf-token"]').attr('content')
                            }, function (res) {
                                $("#chatbox-" + chatId).remove();
                                Swal.fire("Deleted!", "", "success");
                            }).fail(err => {
                                $("#chatbox-" + chatId).remove();
                                Swal.fire("Something went wrong!", "", "danger");
                            })

                        } else if (result.isDenied) {
                            Swal.fire("Deletion cancelled", "", "info");
                        }
                    });
                });

                // unsent chat

                $(document).on('click', '.unsent-chat', function () {
                    let messageId = $(this).attr('data-id');

                    Swal.fire({
                        title: "Do you want to unsent this message?",
                        showDenyButton: true,
                        showCancelButton: true,
                        confirmButtonText: "Yes",
                        denyButtonText: `Don't delete`
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {

                            Swal.fire({
                                title: 'Unsending...',
                                text: '',
                                showConfirmButton: false,
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                            });

                            $.post('/unsent-message', {
                                messageId: messageId,
                                _token: $('meta[name="csrf-token"]').attr('content')
                            }, function (res) {
                                Swal.fire("Unsent!", "", "success");
                            }).fail(err => {
                                $("#chatbox-" + chatId).remove();
                                Swal.fire("Something went wrong!", "", "danger");
                            })

                        } else if (result.isDenied) {
                            Swal.fire("Cancelled", "", "info");
                        }
                    });
                });
            });
        </script>

        <!-- Custom JavaScript -->
        <script src="{{ url('assets/custom/script.js') }}"></script>
        <script>
            function toggleSidebar() {
                document.getElementById('mobileSidebar').classList.toggle('active');
                document.getElementById('sidebar').classList.toggle('active');
            }
        </script>

        <script src="{{ url('assets/angular/angular.min.js') }}"></script>
        
        @livewireScripts
    </body>
</html>
