<form action="/" method="POST" id="email_send_form">
    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="email">Destino</label>
                </th>
                <td>
                    <input name="email" type="email" id="email" value="felipe@rkms.com.br" class="regular-text">
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="subject">Assunto</label>
                </th>
                <td>
                    <input name="subject" type="text" id="subject" class="regular-text">
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="message">Mensagem</label>
                </th>
                <td>
                    <input name="message" type="text" id="message" class="regular-text">
                </td>
            </tr>

            <tr>
                <td style="padding-left: 0;">
                    <button type="submit" class="button button-primary" id="submit_email"> Enviar </button>
                </td>
            </tr>
        </tbody>
    </table>
</form>