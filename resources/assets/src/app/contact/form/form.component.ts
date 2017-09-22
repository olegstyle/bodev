import {Component, ViewChild} from '@angular/core';
import {FormControl, FormGroup, Validators} from "@angular/forms";
import {ContactFormModel} from "../../model/contact-form";
import {ContactFormService} from "../../services/contact-form.service";
import {MyRecaptchaComponent} from "../../utils/compnents/recaptcha/myrecaptcha.component";
import {MdSnackBar} from "@angular/material";

const EMAIL_REGEX = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

@Component({
    selector: 'contact-form',
    templateUrl: 'form.component.html',
    styleUrls: ['form.component.css'],
})
export class ContactFormComponent {
    constructor(
        private service: ContactFormService,
        private snackBar: MdSnackBar
    ) {}

    @ViewChild(MyRecaptchaComponent)
    private recaptchaComponent: MyRecaptchaComponent;

    emailFormControl = new FormControl('', [
        Validators.required,
        Validators.pattern(EMAIL_REGEX)]);
    public formModel: ContactFormModel = {};

    onSubmit(form: FormGroup) {
        if (form.valid) {
            this.service.send(this.formModel).subscribe(data => {
                if (data.success) {
                    form.reset();
                    this.recaptchaComponent.reset();
                    this.snackBar.open('Successfully sent', 'OK', {duration: 2000});
                } else {
                    this.snackBar.open('Wasn\'t sent', 'OK', {duration: 2000});
                }
            });
        }
    }

    onTokenChanged(token: string) {
        this.formModel.captcha = token;
    }
}
