import {Component, ViewChild} from '@angular/core';
import {FormControl, Validators} from "@angular/forms";
import {Http} from "@angular/http";
import {Utils} from "../../utils/utils";

const EMAIL_REGEX = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

@Component({
    selector: 'contact-form',
    templateUrl: 'form.component.html',
    styleUrls: ['form.component.css'],
})
export class ContactFormComponent {
    constructor() {}

    emailFormControl = new FormControl('', [
        Validators.required,
        Validators.pattern(EMAIL_REGEX)]);
    nameValue: string = '';
    emailValue: string = '';
    messageValue: string = '';
    captcha: string = '';


    onSubmit() {
        console.log(this.captcha);
        //this.http.post(Utils.BASE_URL, + 'contact/send', {})
        //    .subscribe();
    }
}
