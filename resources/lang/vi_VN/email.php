<?php

/**
 * email.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // common items
    'greeting'                                => 'Chào bạn,',
    'closing'                                 => 'Haha',
    'signature'                               => 'Thư gửi tự động',
    'footer_ps'                               => 'Thông báo này đã được gửi vì một yêu cầu từ IP :ipAddress đã kích hoạt nó.',

    // admin test
    'admin_test_subject'                      => 'Một thông báo kiểm tra từ bản cài đặt Firefly III của bạn',
    'admin_test_body'                         => 'Đây là một thông báo thử nghiệm từ Firefly III của bạn. Nó đã được gửi đến :email.',

    // invite
    'invitation_created_subject'              => 'An invitation has been created',
    'invitation_created_body'                 => 'Admin user ":email" created a user invitation which can be used by whoever is behind email address ":invitee". The invite will be valid for 48hrs.',
    'invite_user_subject'                     => 'You\'ve been invited to create a Firefly III account.',
    'invitation_introduction'                 => 'You\'ve been invited to create a Firefly III account on **:host**. Firefly III  is a personal, self-hosted, private personal finance manager. All the cool kids are using it.',
    'invitation_invited_by'                   => 'You\'ve been invited by ":admin" and this invitation was sent to ":invitee". That\'s you, right?',
    'invitation_url'                          => 'The invitation is valid for 48 hours and can be redeemed by surfing to [Firefly III](:url). Enjoy!',

    // new IP
    'login_from_new_ip'                       => 'Đăng nhập mới trên Firefly III',
    'slack_login_from_new_ip'                 => 'New Firefly III login from IP :ip (:host)',
    'new_ip_body'                             => 'Firefly III đã phát hiện một thông tin đăng nhập mới vào tài khoản của bạn từ một địa chỉ IP không xác định. Nếu bạn chưa bao giờ đăng nhập từ địa chỉ IP bên dưới hoặc đã hơn sáu tháng trước, Firefly III sẽ cảnh báo bạn.',
    'new_ip_warning'                          => 'Nếu bạn nhận ra địa chỉ IP này hoặc thông tin đăng nhập, bạn có thể bỏ qua thông báo này. Nếu bạn không đăng nhập, nếu bạn không biết điều này là gì, hãy xác minh bảo mật mật khẩu của bạn, thay đổi mật khẩu và đăng xuất tất cả các phiên khác. Để làm điều này, hãy truy cập trang hồ sơ của bạn.',
    'ip_address'                              => 'Địa chỉ IP',
    'host_name'                               => 'Máy chủ',
    'date_time'                               => 'Ngày & Giờ',

    // access token created
    'access_token_created_subject'            => 'Mã truy cập mới đã được tạo',
    'access_token_created_body'               => 'Ai đó (hy vọng bạn) vừa tạo Mã thông báo truy cập API Firefly III mới cho tài khoản người dùng của bạn.',
    'access_token_created_explanation'        => 'With this token, they can access **all** of your financial records through the Firefly III API.',
    'access_token_created_revoke'             => 'If this wasn\'t you, please revoke this token as soon as possible at :url',

    // registered
    'registered_subject'                      => 'Chào mừng đến với Firefly III!',
    'registered_subject_admin'                => 'A new user has registered',
    'admin_new_user_registered'               => 'A new user has registered. User **:email** was given user ID #:id.',
    'registered_welcome'                      => 'Welcome to [Firefly III](:address). Your registration has made it, and this email is here to confirm it. Yay!',
    'registered_pw'                           => 'If you have forgotten your password already, please reset it using [the password reset tool](:address/password/reset).',
    'registered_help'                         => 'Có một biểu tượng trợ giúp ở góc trên bên phải của mỗi trang. Nếu bạn cần giúp đỡ, bấm vào nó!',
    'registered_doc_html'                     => 'If you haven\'t already, please read the [grand theory](https://docs.firefly-iii.org/about-firefly-iii/personal-finances).',
    'registered_doc_text'                     => 'If you haven\'t already, please also read the first use guide and the full description.',
    'registered_closing'                      => 'Hãy tận hưởng!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => 'Thiết lập lại mật khẩu đăng nhập:',
    'registered_doc_link'                     => 'Tài Liệu:',

    // new version
    'new_version_email_subject'               => 'A new Firefly III version is available',

    // email change
    'email_change_subject'                    => 'Địa chỉ email Firefly III của bạn đã thay đổi',
    'email_change_body_to_new'                => 'Bạn hoặc ai đó có quyền truy cập vào tài khoản Firefly III đã thay đổi địa chỉ email của bạn.',
    'email_change_body_to_old'                => 'You or somebody with access to your Firefly III account has changed your email address. If you did not expect this to happen, you **must** follow the "undo"-link below to protect your account!',
    'email_change_ignore'                     => 'Nếu bạn đã bắt đầu thay đổi, bạn có thể bỏ qua thông báo này một cách an toàn.',
    'email_change_old'                        => 'Địa chỉ email cũ là: :email',
    'email_change_old_strong'                 => 'The old email address was: **:email**',
    'email_change_new'                        => 'Địa chỉ email mới là: :email',
    'email_change_new_strong'                 => 'The new email address is: **:email**',
    'email_change_instructions'               => 'Bạn không thể sử dụng Firefly III cho đến khi bạn xác nhận thay đổi này. Vui lòng theo liên kết dưới đây để làm như vậy.',
    'email_change_undo_link'                  => 'Để hoàn tác thay đổi, hãy theo liên kết sau:',

    // OAuth token created
    'oauth_created_subject'                   => 'Một khóa mới đã được tạo',
    'oauth_created_body'                      => 'Somebody (hopefully you) just created a new Firefly III API OAuth Client for your user account. It\'s labeled ":name" and has callback URL `:url`.',
    'oauth_created_explanation'               => 'With this client, they can access **all** of your financial records through the Firefly III API.',
    'oauth_created_undo'                      => 'If this wasn\'t you, please revoke this client as soon as possible at `:url`',

    // reset password
    'reset_pw_subject'                        => 'Yêu cầu tạo lại mật khẩu',
    'reset_pw_instructions'                   => 'Ai đó đã cố gắng thiết lập lại mật khẩu của bạn. Nếu đó là bạn, vui lòng theo liên kết dưới đây để làm như vậy.',
    'reset_pw_warning'                        => '**PLEASE** verify that the link actually goes to the Firefly III you expect it to go!',

    // error
    'error_subject'                           => 'Bắt lỗi trong Firefly III',
    'error_intro'                             => 'Firefly III v::version gặp lỗi: <span style = "font-family: monospace;">:errorMessage </span>.',
    'error_type'                              => 'Lỗi thuộc loại: ":class".',
    'error_timestamp'                         => 'Lỗi xảy ra vào / tại: :time.',
    'error_location'                          => 'Lỗi này xảy ra trong tệp "<span style =" font-family: monospace; ">:file </span>" trên dòng :line với code :code.',
    'error_user'                              => 'Người dùng đã gặp phải lỗi #:id, <a href="mailto::email">:email </a>.',
    'error_no_user'                           => 'Không có người dùng đăng nhập cho lỗi này hoặc không có người dùng nào được phát hiện.',
    'error_ip'                                => 'Địa chỉ IP liên quan đến lỗi này là: :ip',
    'error_url'                               => 'URL là: :url',
    'error_user_agent'                        => 'Đại lý người dùng: :userAgent',
    'error_stacktrace'                        => 'Các stacktrace đầy đủ là dưới đây. Nếu bạn nghĩ rằng đây là một lỗi trong Firefly III, bạn có thể chuyển tiếp tin nhắn này tới <a href="mailto:james@firefly-iii.org?subject=BUG!"> james@firefly-iii.org </a>. Điều này có thể giúp khắc phục lỗi bạn vừa gặp phải.',
    'error_github_html'                       => 'Nếu bạn thích, bạn cũng có thể mở một vấn đề mới trên <a href="https://github.com/firefly-iii/firefly-iii/issues"> GitHub </a>.',
    'error_github_text'                       => 'Nếu bạn thích, bạn cũng có thể mở một vấn đề mới trên https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                  => 'Các stacktrace đầy đủ bên dưới:',
    'error_headers'                           => 'Các tiêu đề sau cũng có thể có liên quan:',

    // report new journals
    'new_journals_subject'                    => 'Firefly III đã tạo một giao dịch mới | Firefly III đã tạo: :count các giao dịch mới',
    'new_journals_header'                     => 'Firefly III đã tạo ra một giao dịch cho bạn. Bạn có thể tìm thấy nó trong bản cài đặt Firefly III: | Firefly III đã tạo :count giao dịch cho bạn. Bạn có thể tìm thấy chúng trong bản cài đặt Firefly III:',

    // bill warning
    'bill_warning_subject_end_date'           => 'Your bill ":name" is due to end in :diff days',
    'bill_warning_subject_now_end_date'       => 'Your bill ":name" is due to end TODAY',
    'bill_warning_subject_extension_date'     => 'Your bill ":name" is due to be extended or cancelled in :diff days',
    'bill_warning_subject_now_extension_date' => 'Your bill ":name" is due to be extended or cancelled TODAY',
    'bill_warning_end_date'                   => 'Your bill **":name"** is due to end on :date. This moment will pass in about **:diff days**.',
    'bill_warning_extension_date'             => 'Your bill **":name"** is due to be extended or cancelled on :date. This moment will pass in about **:diff days**.',
    'bill_warning_end_date_zero'              => 'Your bill **":name"** is due to end on :date. This moment will pass **TODAY!**',
    'bill_warning_extension_date_zero'        => 'Your bill **":name"** is due to be extended or cancelled on :date. This moment will pass **TODAY!**',
    'bill_warning_please_action'              => 'Please take the appropriate action.',

];
