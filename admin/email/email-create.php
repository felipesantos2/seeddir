<?php require __DIR__ . '/form-validate/list-emails-validate.php' ?>

<div class="flex" id="container">

    <form action="<?php esc_url($_SERVER['REQUEST_URI']) ?>" method="POST" id="email_send_form">

        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="email">Destino: </label>
                    </th>
                    <td>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            value="felipe@rkms.com.br"
                            class="regular-text"
                            value="<?php echo esc_attr($email) ?>">
                    </td>
                </tr> <!--end row-->
                <tr>
                    <th scope="row">
                        <label for="subject">Assunto: </label>
                    </th>
                    <td>
                        <input
                            type="text"
                            name="subject"
                            id="subject"
                            value="felipe@rkms.com.br"
                            class="regular-text"
                            value="<?php echo esc_attr($subject) ?>">
                    </td>
                </tr> <!--end row-->
                <tr>
                    <th scope="row">
                        <label for="message">Mensagem: </label>
                    </th>
                    <td>
                        <textarea
                            type="text"
                            name="message"
                            id="message"
                            class="regular-text"
                            value="<?php echo esc_attr($message) ?>"
                            rows="15"> Lorem ipsum dolor met
                        </textarea>
                    </td>
                </tr> <!--end row-->

                <tr style="display: none;">
                    <th scope="row">
                        <label for="message">validate</label>
                    </th>
                    <td>
                        <input
                            type="text"
                            name="submit_validate"
                            id="submit_validate"
                            hidden
                            value="1">
                    </td>
                </tr> <!--end row-->

                <tr>
                    <td style="padding-left: 0;">
                        <button type="submit" class="button button-primary button-hero" id="submit_email"> Enviar </button>
                    </td>
                </tr> <!--end row-->
            </tbody>
        </table>

    </form>

    <div>
        <h1>
            Settings
        </h1>
    </div>

</div>