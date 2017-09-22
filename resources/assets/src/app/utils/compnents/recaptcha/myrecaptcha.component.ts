import {Component, OnInit} from '@angular/core';
import {ReCAPTCHA} from "./recaptcha.interface";
import {ReCAPTCHAListener} from "./recaptcha.listener";

declare var grecaptcha: ReCAPTCHA;
declare var window: any;

@Component({
    selector: 'my-recaptcha',
    templateUrl: 'myrecaptcha.component.html',
    styleUrls: ['myrecaptcha.component.css'],
})
export class MyRecaptchaComponent implements OnInit {
    constructor() {}

    protected listener: ReCAPTCHAListener|null = null;
    protected sitekey: string = '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI';
    protected currentId: string = 'recaptcha_' + Math.random().toString(36).substring(2);
    protected token = '';

    ngOnInit(): void {
        // Export reCAPTCHA to global scope.
        window.reCAPTCHACallback = this.reCAPTCHACallback.bind(this);
        window.reCAPTCHAOnLoad = this.reCAPTCHAOnLoad.bind(this);
    }

    reCAPTCHAOnLoad(): void {
        grecaptcha.render(this.currentId, {
            'sitekey': this.sitekey,
            'callback': 'reCAPTCHACallback'
        });
    }

    /**
     * Verify reCAPTCHA response on server.
     */
    public reCAPTCHACallback(token: string) {
        if (token == null || token.length === 0) {
            this.reset();
        } else {
            this.setToken(token);
        }
    }

    protected setToken(token: string) {
        this.token = token;
        if (this.listener != null) {
            this.listener.onValidToken(this.token);
        }
    }

    public getToken(): string|null {
        return this.token;
    }

    public reset() {
        this.token = '';
        grecaptcha.reset();
    }
}
