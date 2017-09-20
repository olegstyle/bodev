import {Component} from '@angular/core';

@Component({
    selector: 're-captcha',
    templateUrl: 'recaptcha.component.html',
    styleUrls: ['recaptcha.component.css'],
})
export class RecaptchaComponent {
    public siteKey = '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI';
    constructor(){}
}
