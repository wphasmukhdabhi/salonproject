import { ClipboardIcon } from '@heroicons/react/24/outline';
import { useSelect, useDispatch } from '@wordpress/data';
import { __ } from '@wordpress/i18n';
import { STORE_KEY } from '../store';
import { getLocalStorageItem, removeLocalStorageItem } from '../helpers';
import { defaultOnboardingAIState } from '../store/reducer';
import Modal from './modal';
import Button from './button';
import { useNavigateSteps } from '../router';
import { getCookie } from '../utils/helpers';

const ContinueProgressModal = () => {
	const {
		setContinueProgressModal,
		setConfirmationStartOverModal,
		setWebsiteOnboardingAIDetails,
	} = useDispatch( STORE_KEY );
	const { navigateTo } = useNavigateSteps();
	const { continueProgressModal } = useSelect( ( select ) => {
		const { getContinueProgressModalInfo } = select( STORE_KEY );
		return {
			continueProgressModal: getContinueProgressModalInfo(),
		};
	}, [] );

	const handleStartOver = () => {
		const showWarningModal =
			! aiBuilderVars?.hideCreditsWarningModal &&
			getCookie( 'ai-show-start-over-warning' );
		const savedData = getLocalStorageItem(
			'ai-builder-onboarding-details'
		);

		if ( showWarningModal && savedData?.websiteInfo?.uuid ) {
			setContinueProgressModal( { open: false } );
			setConfirmationStartOverModal( { open: true } );
			return;
		}

		setConfirmationStartOverModal( { open: false } );
		removeLocalStorageItem( 'ai-builder-onboarding-details' );
		setWebsiteOnboardingAIDetails( defaultOnboardingAIState );
		setContinueProgressModal( { open: false } );
		navigateTo( {
			to: '/',
			replace: true,
		} ); // Navigate to the first step
	};

	const handleContinue = () => {
		setConfirmationStartOverModal( { open: false } );
		setContinueProgressModal( { open: false } );
	};

	return (
		<Modal
			open={ continueProgressModal?.open }
			setOpen={ ( toggle, type ) => {
				if ( type === 'close-icon' ) {
					handleContinue();
				}
			} }
			width={ 480 }
			height="280"
			overflowHidden={ false }
			className={ 'px-8 pt-8 pb-8 font-sans' }
		>
			<div>
				<div className="flex items-center gap-3">
					<ClipboardIcon className="w-8 h-8 text-accent-st" />
					<div className="font-bold text-2xl leading-8 text-zip-app-heading">
						{ __( 'Resume your last session?', 'ai-builder' ) }
					</div>
				</div>

				<div className="mt-5">
					<div className="text-zip-body-text text-base font-normal leading-6">
						{ __(
							'It appears that your previous website building session was interrupted. Would you like to pick up where you left off?',
							'ai-builder'
						) }
					</div>
					<div className="flex items-center gap-3 justify-center mt-8 flex-col xs:flex-row">
						<Button
							type="submit"
							variant="primary"
							size="medium"
							className="min-w-[206px] text-sm font-semibold leading-5 px-5 w-full xs:w-auto"
							onClick={ handleContinue }
						>
							{ __( 'Resume Previous Session', 'ai-builder' ) }
						</Button>
						<Button
							variant="white"
							size="medium"
							onClick={ handleStartOver }
							className="min-w-[206px] text-sm font-semibold leading-5 w-full xs:w-auto"
						>
							{ __( 'Start Over', 'ai-builder' ) }
						</Button>
					</div>
				</div>
			</div>
		</Modal>
	);
};

export default ContinueProgressModal;
